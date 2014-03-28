// JavaScript Document

//-> Traitement générique des appels asynchrones
function XHR(code,item1,item2) {
 var xhr = null;
 
 switch (code) {
  //-> POST spécial menu public sans authentification
  case 0: donnees = "menu="+item1;
          chemin = "library/";
          formScript = "dispatchPublic";
          break;
  //-> POST spécifique pour l'identification 
  //-| item1 est non utilisé
  //-| item2 donne l'id du formulaire   
  case 1: login = document.getElementById(item2)[0].value;
          passe = SHA1(login+document.getElementById(item2)[1].value);
          donnees = "login="+login+"&passe="+passe;
          chemin = "";
          formScript = "ident";
          break;
  //-> POST avec données pour formulaire    
  case 2: nbr = document.getElementById(item2).length-2;
          valeur = 0;
          donnees = "";
 
          for (i=0;i<=nbr;i++) {
           valeur = document.getElementById(item2)[i].value;
           donnees = donnees + "v" + i + "=" + valeur;
           if (i<nbr) { donnees = donnees + "&" };
          }

          chemin = item1+"/";
          formScript = item2;
          break;
  //-> POST avec données pour suppression    
  case 3: donnees = "id="+item1;
          chemin = "library/";
          formScript = item2;
          break;
  //-> Fichiers    
  case 4: break;
  //-> Déconnexion d'une session
  case 9: donnees = "";
          chemin = "";
          formScript = "out";
          break;              
 }
 
 //-> Création de l'objet XHR
 if (window.XMLHttpRequest) { xhr = new XMLHttpRequest(); } else {
  if (window.ActiveXObject) { 
   try {
    xhr = new ActiveXObject("Msxml2.XMLHTTP");
   } catch (e) {
      xhr = new ActiveXObject("Microsoft.XMLHTTP");
     }
  } else { 
     alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest..."); 
     xhr = false; 
    }
 }
 
 //-> Attente des résultats en asynchrone 
 xhr.onreadystatechange = function() {
  if (xhr.readyState==4) {
   if (xhr.status==200) {
    reponse = xhr.responseText;
    //-> Retour par chargement de la page principale ou erreur
    if (reponse=="ok") { document.location.href = "http://www.chamedu.fr/~jambert/index.php"; } else { alert("Reponse :"+reponse); }     
   } else {
      //-> alert("XHR : "+xhr.status);   
    } 
  }
 }
 
 //-> Gestion de l'envoi
 //alert("./core/"+chemin+formScript+".php");
 xhr.open("POST","http://www.chamedu.fr/~jambert/core/"+chemin+formScript+".php",true);
 //if (item1=="edit") {
 //  alert(donnees);
 // xhr.setRequestHeader("Content-Type","multipart/form-data");   
 //} else {
 xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
 //} 
 xhr.send(donnees);
}
