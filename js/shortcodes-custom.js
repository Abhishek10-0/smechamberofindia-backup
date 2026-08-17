/* global google, SyntaxHighlighter */

jQuery(document).ready(function($) {
    "use strict";
    if($('#map_contact_01').length) {
        var map;
        var myLatLng=new google.maps.LatLng(48.85661, 2.35222);
        var myOptions= {
            zoom:12, center:myLatLng, zoomControl:true, mapTypeId:google.maps.MapTypeId.ROADMAP, mapTypeControl:false, styles:[ {
                stylers:[ {
                    hue: '#ba131a'
                }
                , {
                    saturation: -30
                }
                , {
                    lightness: 10
                }
                ]
            }
            ]
        };
        map=new google.maps.Map(document.getElementById('map_contact_01'), myOptions);
        var marker=new google.maps.Marker( {
            position: map.getCenter(), map: map, icon: '/images/map-icon.png'
        }
        );
        marker.getPosition();
        var infowindow=new google.maps.InfoWindow( {
            content: '', position: myLatLng
        }
        );
        infowindow.open(map);
    }
    if($('#map_contact_02').length) {
        var map;
        var myLatLng=new google.maps.LatLng(48.85661, 2.35222);
        var myOptions= {
            zoom:12, center:myLatLng, zoomControl:true, mapTypeId:google.maps.MapTypeId.ROADMAP, mapTypeControl:false, styles:[ {
                saturation: -100, lightness: 10
            }
            ]
        };
        map=new google.maps.Map(document.getElementById('map_contact_02'), myOptions);
        var marker=new google.maps.Marker( {
            position: map.getCenter(), map: map, icon: 'images/map-icon.png'
        }
        );
        marker.getPosition();
        var infowindow=new google.maps.InfoWindow( {
            content: '', position: myLatLng
        }
        );
        infowindow.open(map);
    }
    if($('#map_contact_03').length) {
        var map;
        var myLatLng=new google.maps.LatLng(48.85661, 2.35222);
        var myOptions= {
            zoom:12, center:myLatLng, zoomControl:true, mapTypeId:google.maps.MapTypeId.ROADMAP, mapTypeControl:false, styles:[ {
                stylers:[ {
                    hue: '#0073FF'
                }
                , {
                    saturation: -30
                }
                , {
                    lightness: 10
                }
                ]
            }
            ]
        };
        map=new google.maps.Map(document.getElementById('map_contact_03'), myOptions);
        var marker=new google.maps.Marker( {
            position: map.getCenter(), map: map, icon: 'images/map-icon.png'
        }
        );
        marker.getPosition();
        var infowindow=new google.maps.InfoWindow( {
            content: '', position: myLatLng
        }
        );
        infowindow.open(map);
    }
    if($('#map_contact_04').length) {
        var map;
        var myLatLng=new google.maps.LatLng(48.85661, 2.35222);
        var myOptions= {
            zoom:12, center:myLatLng, zoomControl:true, mapTypeId:google.maps.MapTypeId.ROADMAP, mapTypeControl:false, styles:[ {
                stylers:[ {
                    hue: '#00FF55'
                }
                , {
                    saturation: -30
                }
                , {
                    lightness: 10
                }
                ]
            }
            ]
        };
        map=new google.maps.Map(document.getElementById('map_contact_04'), myOptions);
        var marker=new google.maps.Marker( {
            position: map.getCenter(), map: map, icon: 'images/map-icon.png'
        }
        );
        marker.getPosition();
        var infowindow=new google.maps.InfoWindow( {
            content: '', position: myLatLng
        }
        );
        infowindow.open(map);
    }
    SyntaxHighlighter.all();
}

);