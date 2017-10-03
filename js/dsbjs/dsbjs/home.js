function postwithoutimage(){
    var xmlhttp;
    var userid = document.getElementById("yid").value;
    var post = document.getElementById("statuswoi").value;
    var url;
    if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    }
    else{// code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function (){
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
            var result=xmlhttp.responseText; 
            document.getElementById("statuswoi").value="";
            var previouscontent = document.getElementById("statusdiv").innerHTML;
            document.getElementById("statusdiv").innerHTML = result + previouscontent; 
            //alert(result);
        }
    }
    url = "./package/servlets/home/insertpostwithoutimage.php?status=" + post + "&&id=" + userid;
    xmlhttp.open("GET", url, true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("status=" + post + "&&id=" + userid);
}

function like(str)
{
    var xmlhttp;
    document.getElementById(str).onclick = null;
    var userid = document.getElementById("yid").value;
    //alert(str);
    var url;
    if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    }
    else{// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function(){
        if (xmlhttp.readyState==4 && xmlhttp.status==200){
            //alert(xmlhttp.responseText);
            againsetunlike(str);
        }
    }
    url = "./package/servlets/posts/likepost.php";
    xmlhttp.open("POST",url,true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("statusid="+str+"&userid="+userid);
}

function againsetunlike(statusid){
    document.getElementById(statusid+"likestatus").innerHTML="<div class='col-sm-2'><button id='"+statusid+"' style='color:#37474F;' class='btn btn-primary btn-xs icon-heart-fill' onclick='unlike(this.id)'></button></div>";
    totallike(statusid);
}

function unlike(str){
    document.getElementById(str).onclick = null;
    var xmlhttp;
    var userid = document.getElementById("yid").value;
    //alert(str);
    var url;
    if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    }
    else{// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function(){
        if (xmlhttp.readyState==4 && xmlhttp.status==200){
            againsetlike(str);
        }
    }
    url = "./package/servlets/posts/unlikepost.php";
    xmlhttp.open("POST",url,true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("statusid="+str+"&userid="+userid);
}
function againsetlike(statusid){
    document.getElementById(statusid+"likestatus").innerHTML="<div class='col-sm-2'><button id='"+statusid+"' class='btn btn-default btn-xs icon-heart' onclick='like(this.id)'></button></div>";
    totallike(statusid);
}

function totallike(str)
{
    var xmlhttp;
    var url;
    if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    }else{// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function(){
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
            document.getElementById(str+"totallike").innerHTML="Total Like "+xmlhttp.responseText;
        }
    }
    url="./package/servlets/posts/totallike.php";
    xmlhttp.open("POST",url,true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("statusid="+str);
}