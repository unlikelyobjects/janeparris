jQuery((function(t){"use strict";t("#content").on("click","#pagination > a",(function(n){n.preventDefault();var e=t(this).attr("href");t("#content").fadeOut(500,(function(){t(this).load(e+" #content",(function(){t(this).fadeIn(500)}))}))}))}));