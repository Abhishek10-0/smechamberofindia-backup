ko.underscoreTemplateEngine = function() {};
ko.underscoreTemplateEngine.prototype = ko.utils.extend(new ko.templateEngine(), {
    renderTemplateSource: function(template, context, options) {
        var precompiled = template['data']('precompiled'),
            renderedMarkup = null;
        if (!precompiled) {
            precompiled = _.template("<% with($data) { %> " + template.text() + " <% } %>");
            template['data']('precompiled', precompiled);
        }
        renderedMarkup = precompiled(context).replace(/\s+/g, " ");
        return ko.utils.parseHtmlFragment(renderedMarkup);
    },
    createJavaScriptEvaluatorBlock: function(script) {
        return "<%= " + script + " %>";
    }
});
ko.setTemplateEngine(new ko.underscoreTemplateEngine());

