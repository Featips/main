// 4: VISA, 51 -> 55: MasterCard, 36-38-39: DinersClub, 34-37: American Express, 65: Discover, 5019: dankort

 // Comment ai-je fais cela ?
$(function () {
// on déclare un tableau de variable "cards" , dans ce tableau on y ajoute des elements de type carte
// ici nom de la card + la couleur + la source (l'image en haut à droite)
  var cards = [{
    nome: "mastercard",
    colore: "#0061A8",
    src: "https://upload.wikimedia.org/wikipedia/commons/0/04/Mastercard-logo.png"
  }, {
    nome: "visa",
    colore: "#E2CB38",
    src: "https://upload.wikimedia.org/wikipedia/commons/thumb/5/5e/Visa_Inc._logo.svg/2000px-Visa_Inc._logo.svg.png"
  }, {
    nome: "banquePopulaire",
    colore: "red",
    src: "/assets/bankimg/banque_populaire.png"
  }, {
    nome: "creditAgricole",
    colore: "#108168",
    src: "/assets/bankimg/logo-credit-agricole.png "
  }, {
    nome: "societeGeneral",
    colore: "#86B8CF",
    src: "/assets/bankimg/societe-general-logo.jpg"
  }, {
    nome: "boursorama",
    colore: "#0061A8",
    src: "/assets/bankimg/boursorama.png"
  }]

  var month = 0;
  var html = document.getElementsByTagName('html')[0];
  var number = "";
// Variable qui aide à la séparation des mois
  var selected_card = -1;


  $(document).click(function (e) {
    console.log(e);
    if (!$(e.target).is(".ccv") || !$(e.target).closest(".ccv").length) {
      $(".card").css("transform", "rotatey(0deg)");
      $(".seccode").css("color", "var(--text-color)");
    }
    if (!$(e.target).is(".expire") || !$(e.target).closest(".expire").length) {
      $(".date_value").css("color", "var(--text-color)");
    }
    if (!$(e.target).is(".number") || !$(e.target).closest(".number").length) {
      $(".card_number").css("color", "var(--text-color)");
    }
    if (!$(e.target).is(".inputname") || !$(e.target).closest(".inputname").length) {
      $(".fullname").css("color", "var(--text-color)");
    }
  });
      // Quand on clique sur un des champs -> ça change (focus) la couleur des points en html "&#x25CF";
      //par exemple dans le premier e.target, on clique sur "ccv" qui est enfaite le CVC
      // la classe .card va "activer" le css = cela va lui donner comme attribut "transform" et va lui affecter la valeur rotatey(0de)

  //Card number input
  $(".number").keyup(function (event) {
    $(".card_number").text($(this).val());
    number = $(this).val();

    if (parseInt(number.substring(0, 2)) > 50 && parseInt(number.substring(0, 2)) < 56) {
      selected_card = 0;
    } else if (parseInt(number.substring(0, 1)) == 4 || parseInt(number.substring(0,1))== 8) {
      selected_card = 1;
    } else if (parseInt(number.substring(0, 2)) == 36 || parseInt(number.substring(0, 2)) == 38 || parseInt(number.substring(0, 2)) == 39) {
      selected_card = 2;
    } else if (parseInt(number.substring(0, 2)) == 34 || parseInt(number.substring(0, 2)) == 37) {
      selected_card = 3;
    } else if (parseInt(number.substring(0, 2)) == 40 || parseInt(number.substring(0, 2)) == 44 || parseInt(number.substring(0,2)) == 47){
      selected_card = 4;
    } else if (parseInt(number.substring(0, 4)) == 50) {
      selected_card = 5;
    } else {
      selected_card = -1;
    }


    if (selected_card != -1) {
      html.setAttribute("style", "--card-color: " + cards[selected_card].colore);
      $(".bankid").attr("src", cards[selected_card].src).show();
    } else {
      html.setAttribute("style", "--card-color: #cecece");
      $(".bankid").attr("src", "").hide();
    }

    if ($(".card_number").text().length === 0) {
      $(".card_number").html("&#x25CF;&#x25CF;&#x25CF;&#x25CF; &#x25CF;&#x25CF;&#x25CF;&#x25CF; &#x25CF;&#x25CF;&#x25CF;&#x25CF; &#x25CF;&#x25CF;&#x25CF;&#x25CF;");
    }

  }).focus(function () {
    $(".card_number").css("color", "white");
  }).on("keydown input", function () {

    $(".card_number").text($(this).val());

    if (event.key >= 0 && event.key <= 9) {
      if ($(this).val().length === 4 || $(this).val().length === 9 || $(this).val().length === 14) {
        $(this).val($(this).val() + " ");
      }
    }
  })

  //Name Input
  $(".inputname").keyup(function () {
    $(".fullname").text($(this).val());
    if ($(".inputname").val().length === 0) {
      $(".fullname").text("FULL NAME");
    }
    return event.charCode;
  }).focus(function () {
    $(".fullname").css("color", "white");
  });

  //Security code Input
  $(".ccv").focus(function () {
    $(".card").css("transform", "rotatey(180deg)");
    $(".seccode").css("color", "white");
  }).keyup(function () {
    $(".seccode").text($(this).val());
    if ($(this).val().length === 0) {
      $(".seccode").html("&#x25CF;&#x25CF;&#x25CF;");
    }
  }).focusout(function () {
    $(".card").css("transform", "rotatey(0deg)");
    $(".seccode").css("color", "var(--text-color)");
  });


  //Date expire input
  $(".expire").keypress(function (event) {
    if (event.charCode >= 48 && event.charCode <= 57) {
      if ($(this).val().length === 1) {
        $(this).val($(this).val() + event.key + " / ");
      } else if ($(this).val().length === 0) {
        if (event.key == 1 || event.key == 0) {
          month = event.key;
          return event.charCode;
        } else {
          $(this).val(0 + event.key + " / ");
        }
      } else if ($(this).val().length > 2 && $(this).val().length < 9) {
        return event.charCode;
      }
    }
    return false;
  }).keyup(function (event) {
    $(".date_value").html($(this).val());
    if (event.keyCode == 8 && $(".expire").val().length == 4) {
      $(this).val(month);
    }

    if ($(this).val().length === 0) {
      $(".date_value").text("MM / YYYY");
    }
  }).keydown(function () {
    $(".date_value").html($(this).val());
  }).focus(function () {
    $(".date_value").css("color", "white");
  });
});