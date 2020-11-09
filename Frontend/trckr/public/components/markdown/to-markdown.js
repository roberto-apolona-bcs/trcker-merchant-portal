/**
 * @module       to-markdown
 * @author       Dom Christie
 * @see          https://github.com/domchristie/turndown
 * @license      MIT
 * @version      5.0.1
 */
var toMarkdown=function(t){function e(t,e){var i="void"===e.type?"<"+e.tag+"\\b([^>]*)\\/?>":"<"+e.tag+"\\b([^>]*)>([\\s\\S]*?)<\\/"+e.tag+">",n=new RegExp(i,"gi"),o="";return o="string"==typeof e.replacement?t.replace(n,e.replacement):t.replace(n,function(t,i,n,o){return e.replacement.call(this,t,i,n,o)})}function i(t){return new RegExp(t+"\\s*=\\s*[\"']?([^\"']*)[\"']?","i")}function n(t){return t=t.replace(/<(ul|ol)\b[^>]*>([\s\S]*?)<\/\1>/gi,function(t,e,i){var n=i.split("</li>");for(n.splice(n.length-1,1),r=0,l=n.length;l>r;r++)if(n[r]){var o="ol"===e?r+1+".  ":"*   ";n[r]=n[r].replace(/\s*<li[^>]*>([\s\S]*)/i,function(t,e){return e=e.replace(/^\s+/,""),e=e.replace(/\n\n/g,"\n\n    "),e=e.replace(/\n([ ]*)+(\*|\d+\.) /g,"\n$1    $2 "),o+e})}return n.join("\n")}),"\n\n"+t.replace(/[ \t]+\n|\s+$/g,"")}function o(t){return t=t.replace(/<blockquote\b[^>]*>([\s\S]*?)<\/blockquote>/gi,function(t,e){return e=e.replace(/^\s+|\s+$/g,""),e=s(e),e=e.replace(/^/gm,"> "),e=e.replace(/^(>([ \t]{2,}>)+)/gm,"> >")})}function s(t){return t=t.replace(/^[\t\r\n]+|[\t\r\n]+$/g,""),t=t.replace(/\n\s+\n/g,"\n\n"),t=t.replace(/\n{3,}/g,"\n\n")}for(var a=[{patterns:"p",replacement:function(t,e,i){return i?"\n\n"+i+"\n":""}},{patterns:"br",type:"void",replacement:"\n"},{patterns:"h([1-6])",replacement:function(t,e,i,n){for(var o="",s=0;e>s;s++)o+="#";return"\n\n"+o+" "+n+"\n"}},{patterns:"hr",type:"void",replacement:"\n\n* * *\n"},{patterns:"a",replacement:function(t,e,n){var o=e.match(i("href")),s=e.match(i("title"));return o?"["+n+"]("+o[1]+(s&&s[1]?' "'+s[1]+'"':"")+")":t}},{patterns:["b","strong"],replacement:function(t,e,i){return i?"**"+i+"**":""}},{patterns:["i","em"],replacement:function(t,e,i){return i?"_"+i+"_":""}},{patterns:"code",replacement:function(t,e,i){return i?"`"+i+"`":""}},{patterns:"img",type:"void",replacement:function(t,e,n){var o=e.match(i("src")),s=e.match(i("alt")),a=e.match(i("title"));return"!["+(s&&s[1]?s[1]:"")+"]("+o[1]+(a&&a[1]?' "'+a[1]+'"':"")+")"}}],r=0,l=a.length;l>r;r++)if("string"==typeof a[r].patterns)t=e(t,{tag:a[r].patterns,replacement:a[r].replacement,type:a[r].type});else for(var c=0,h=a[r].patterns.length;h>c;c++)t=e(t,{tag:a[r].patterns[c],replacement:a[r].replacement,type:a[r].type});t=t.replace(/<pre\b[^>]*>`([\s\S]*)`<\/pre>/gi,function(t,e){return e=e.replace(/^\t+/g,"  "),e=e.replace(/\n/g,"\n    "),"\n\n    "+e+"\n"}),t=t.replace(/^(\s{0,3}\d+)\. /g,"$1\\. ");for(var d=/<(ul|ol)\b[^>]*>(?:(?!<ul|<ol)[\s\S])*?<\/\1>/gi;t.match(d);)t=t.replace(d,function(t){return n(t)});for(var u=/<blockquote\b[^>]*>((?:(?!<blockquote)[\s\S])*?)<\/blockquote>/gi;t.match(u);)t=t.replace(u,function(t){return o(t)});return s(t)};"object"==typeof exports&&(exports.toMarkdown=toMarkdown);