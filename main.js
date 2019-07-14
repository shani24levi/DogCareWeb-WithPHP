$("#logo_shaker").mouseover(function () {
  $(this).effect("shake", { times:5 }, 200);
});

$(document).ready(function(){
    $.getJSON("frontPage.php",function(data){
    var count=1;
        $.each(data, function(key, val) { 
            
            var container = document.createElement("div");
            container.className = "container";
            var small_container = document.createElement("div");
            small_container.className = "small_container";
            var img = document.createElement("img");
            var heart_lg = document.createElement('img');
            heart_lg.id = "heart_logo";
            heart_lg.className = "small_logos";
            var p1 = document.createElement("p");
            p1.innerHTML = val.desc1;
            var p2 = document.createElement("p");
            p2.innerHTML = val.desc2;
            var link = document.createElement('a');
            link.innerHTML = '<a href="#?itemId='+count+'">פרוייקט '+count+'</a>'
            img.setAttribute("src",val.pic);
            count++;

            container.appendChild(img);
            container.appendChild(link);
            container.appendChild(heart_lg);
            container.appendChild(small_container);
            small_container.appendChild(p1);
            small_container.appendChild(p2);
            var wrap = document.getElementById("wrapper");
            wrap.append(container);
            });
    })
});

function getProjName(){
    var aKeyValue = window.location.search.substring(1).split('?');
    var projId = aKeyValue[ 0 ].split('=')[ 1 ];
    return projId;
};
