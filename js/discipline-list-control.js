/*resource.JS.discipline-list-control*/
/*24032017-050611*/
(function () { $('#modal-discipline-list-control').appendTo($('body')); })();

(function () {
  'use strict';

  var _controlUrl = '/controls/discipline_list_control.ashx',
      _checkbox = '<span class="checkbox"></span>',
      _target = null,
      _modalCustom = $('#modal-discipline-list-control'),
      _ddlCustomDiscipline = $('#ddl-custom-discipline'),
      _txtCustomDiscipline = $('#txt-custom-discipline'),
      _panelCustomSpecialties = $('#panel-custom-specialties'),
      _txtCustomSpecialty = $('#txt-custom-specialty'),
      _customSpecialtyId = 100;

  /**
   * Discipline model
   */
  var disciplineModel = function (json) {
    var self = this;

    this.disciplineId = ko.observable(json.DisciplineId);
    this.name = ko.observable(json.Name);
    this.openState = ko.observable('hidden');
    this.specialties = ko.observableArray([]);
    this.selectedCount = ko.observable(0);

    this.klass = ko.computed(function () {
      return (this.selectedCount() > 0 ? 'selected' : '');
    }, this);

    this.getSpecialtyById = function (id) {
      var specialty = _.find(self.specialties(), function (s) {
        return (s.specialtyId() === id);
      });
      return specialty;
    };

    _.each(json.Specialties, function (s) {
      self.specialties.push(new specialtiesModel(s));
    });
  };

  /**
   * Specialty model
   */
  var specialtiesModel = function (json) {
    var self = this;

    this.specialtyId = ko.observable(json.SpecialtyId);
    this.disciplineId = ko.observable(json.DisciplineId);
    this.name = ko.observable(json.SpecialtyName);
    this.selected = ko.observable();

    this.klass = ko.computed(function () {
      return (this.selected() === true ? 'selected' : '');
    }, this);
  };

  var disciplineListView = function () {
    var self = this;

    this.disciplines = ko.observableArray([]);
    this.customSpecialties = ko.observableArray([]);
    this.selectedSpecialties = [];

    // get discipline by id
    this.getDisciplineById = function (id) {
      var disicpline = _.find(self.disciplines(), function (d) {
        return (d.disciplineId() === id);
      });
      return disicpline;
    };

    // select a discipline click
    this.selectDiscipline = function (v, f) {
      var discipline = self.getDisciplineById(parseInt($(f.target).data('discipline-id'), 0));
      toggleDiscipline(discipline);
    };

    // select a specialty click
    this.selectSpecialty = function (v, f) {
      var discipline = self.getDisciplineById(parseInt($(f.target).data('discipline-id'), 0)),
          specialty = discipline.getSpecialtyById(parseInt($(f.target).data('specialty-id'), 0));

      if (specialty.selected()) {
        specialty.selected(false);
        discipline.selectedCount(discipline.selectedCount() - 1);
      } else {
        specialty.selected(true);
        discipline.selectedCount(discipline.selectedCount() + 1);
      }

      if (discipline.selectedCount() === 0) {
        toggleDiscipline(discipline);
      }

      self.updateSelectedSpecialties(specialty);
    };

    // update selected specialties
    this.updateSelectedSpecialties = function (specialty) {
      if (specialty.selected()) {
        self.selectedSpecialties.push(specialty.specialtyId());
      } else {
        self.selectedSpecialties = _.without(self.selectedSpecialties, specialty.specialtyId());
      }
      _target.val(self.selectedSpecialties.join(','));
    };

    // launches the custom specialty modal
    this.launchCustomSpecialty = function () {
      _modalCustom.modal();
    };

    // show / hide custom specialties panel
    this.checkCustomDisciplineEntry = function () {
      if (_ddlCustomDiscipline.val() != '' || _txtCustomDiscipline.val().length > 0) {
        //_panelCustomSpecialties.slideDown();
      } else {
        //_panelCustomSpecialties.slideUp();
      }

      if (_txtCustomDiscipline.val().length > 0) {
        _ddlCustomDiscipline.attr('disabled', 'disabled').css('opacity', '0.4');
      } else {
        _ddlCustomDiscipline.removeAttr('disabled').css('opacity', '1');
      }

      return true;
    };

//    // adds a custom specialty
//    this.addCustomSpecialty = function () {
//      if (_txtCustomSpecialty.val().length > 0) {
//        _customSpecialtyId++;
//        self.customSpecialties.push(new specialtiesModel({ SpecialtyId: _customSpecialtyId, SpecialtyName: _txtCustomSpecialty.val() }));
//        _txtCustomSpecialty.val('');
//      }
//    };

//    // fired on keypress of adding custom specialty
//    this.addCustomSpecialtyKeyPress = function (v, event) {
//      var kc = (event.which ? event.which : event.keyCode);
//      if (kc === 13) {
//        self.addCustomSpecialty();
//        return false;
//      }
//      return true;
//    };

//    // remove a custom specialty
//    this.removeCustomSpecialty = function (v, f) {
//      if (confirm('Are you sure you want to remove this specialty?')) {
//        var specialtyId = parseInt($(f.target).data('specialty-id'), 0),
//            specialty = _.find(self.customSpecialties(), function (s) {
//              return (s.specialtyId() === specialtyId);
//            });
//        self.customSpecialties.remove(specialty);
//      }
//    };

    // saves custom specialties
    this.saveCustomSpecialties = function () {
      if (_txtCustomSpecialty.val().length > 0) {
        _customSpecialtyId++;
        self.customSpecialties.push(new specialtiesModel({ SpecialtyId: _customSpecialtyId, SpecialtyName: _txtCustomSpecialty.val() }));
        _txtCustomSpecialty.val('');
      }
      
      var specialties = [];

      _.each(self.customSpecialties(), function (s) {
        specialties.push(s.name());
      });

      if (specialties.length === 0) {
        _modalCustom.modal('hide');
        return;
      }

      $.ajax({
        type: 'POST',
        url: _controlUrl + '?method=saveCustom',
        data: {
          selectedDisciplineId: _ddlCustomDiscipline.val(),
          customDisciplineName: _txtCustomDiscipline.val(),
          customSpecialties: specialties.join(';')
        },
        success: function (data, xhr, status) {
          self.processSavedSpecialties($.parseJSON(data));
        }
      });
    };

    this.processSavedSpecialties = function (json) {
      var discipline = self.getDisciplineById(parseInt(json.DisciplineId, 0));

      if (discipline == null) {
        discipline = new disciplineModel(json);
        self.disciplines.push(discipline);
      } else {
        _.each(json.Specialties, function (s) {
          discipline.specialties.push(new specialtiesModel(s));
          //self.updateSelectedSpecialties(s);
        });
      }

      if (discipline.openState() === 'hidden') {
        toggleDiscipline(discipline);
      }

      _modalCustom.modal('hide');
    };

    // loads all disciplines from server and preselects existing specialties
    this.getDisciplines = function () {
      var preselectedIds = _target.val().split(',');

      $.getJSON(_controlUrl, function (data) {
        self.disciplines.removeAll();

        _.each(data, function (d) {
          var discipline = new disciplineModel(d);
          self.disciplines.push(discipline);

          _.each(preselectedIds, function (id) {
            var id = parseInt(id, 0),
                specialty = _.find(discipline.specialties(), function (s) {
                  return (s.specialtyId() === id);
                });

            if (specialty) {
              discipline = self.getDisciplineById(specialty.disciplineId());

              if (discipline) {
                specialty.selected(true);
                discipline.selectedCount(discipline.selectedCount() + 1);

                if (discipline.selectedCount() === 0) {
                  toggleDiscipline(discipline);
                }

                self.updateSelectedSpecialties(specialty);
              }
            }
          });
        });
      });
    };

    // clears the custom form when the modal is hidden
    this.bindCustomSpecialtesModal = function () {
      _modalCustom.on('hidden', function () {
        _ddlCustomDiscipline.val('').removeAttr('disabled').css('opacity', '1');
        _txtCustomDiscipline.val('');
        _txtCustomSpecialty.val('');
        self.customSpecialties.removeAll();
      });
    };

    _target = $('#' + $('#discipline-list-control').data('target'));

    if (_target.length > 0) {
      this.getDisciplines();
      this.bindCustomSpecialtesModal();
    }
  };

  // show / hide specialty group
  function toggleDiscipline(discipline) {
    var specialtyGroup = $('#discipline-list-specialty-group-' + discipline.disciplineId());
    if (discipline.openState() === 'hidden') {
      specialtyGroup.slideDown();
      discipline.openState('open');
    } else {
      specialtyGroup.slideUp();
      discipline.openState('hidden');
    }
  }

  ko.applyBindings(new disciplineListView(), document.getElementById('body'));

})();