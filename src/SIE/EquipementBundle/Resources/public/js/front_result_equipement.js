/* 
 * Copyright (C) 2016 root
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

var pathEquipement = "http://127.0.0.1/ref_com_sie/web/app_dev.php/equipement/"

var equipements = [];

equipements[0] = [];  //id_equipement
equipements[1] = [];  //lib_equipement
equipements[2] = [];  //id_constructeur
equipements[3] = [];  //lib_constructeur
equipements[4] = [];  //id_type
equipements[5] = [];  //lib_type
equipements[5] = [];  //id_version
equipements[6] = [];  //version
equipements[7] = [];     //num serie

var constructeurs = [];
constructeurs[0] = [];    //id_constructeur
constructeurs[1] = [];    //lib_constructeur

var typeEquipement = [];
typeEquipement[0] = [];
typeEquipement[1] = [];

var id_equipement = "";  //equipement en cours

var msgNoCentral = "Pas de central selectioné !";

var newEquipement = false;

$(document).ready(function () {

    $('#btn_ajout_equipement').click(function () {
        if (id_central !== "") {
            newEquipement = true;
            fre_prepareUiToAdd();

        } else {

            alert(msgNoCentral);
        }

    });
    $('#btn_sup_equipement').click(function () {
        if (id_central !== "") {
            fre_addEquipement();

        } else {

            alert(msgNoCentral);
        }
    });
    $('#btn_last_equipement').click(function () {
        if (id_central !== "") {

        } else {

            alert(msgNoCentral);
        }
    });
    $('#btn_modif_equipement').click(function () {
        if (id_central !== "") {
            fre_active_input();
            fre_afficheBtnValidAnnulle();
            fre_loadConstructeur();
            fre_displayConstructeur();
            fre_loadType();
            fre_displayType();

        } else {

            alert(msgNoCentral);
        }
    });
    $('#btn_next_equipement').click(function () {
        if (id_central !== "") {

        } else {

            alert(msgNoCentral);
        }
    });
    $('#btn_valid_modif_equipement').click(function () {

        if (id_central !== "" & fre_formulaire_est_valide()) {
            //validation de la modification

            if (newEquipement) {



                fre_addEquipement()



            } else {


                fre_modifEquipement();


            }
        } else {

            alert("Saisie non valide");

        }
        fre_desactive_input();
        fre_cacheBtnValidAnnulle();
    });
    $('#btn_annuler_modif_equipement').click(function () {


        //UI
        $('#btn_valid_modif_equipement').attr('style', 'visibility:hidden');
        $('#btn_annuler_modif_equipement').attr('style', 'visibility:hidden');

        $('#lib_equipement').attr('disabled', 'disabled');
        $('#mac_equipement').attr('disabled', 'disabled');
        $('#version_equipement').attr('disabled', 'disabled');
        fre_displayEquipementByIdEquipement(id_equipement);

    });


    $('#select_equipement').change(function () {
        id_eq = $('#select_equipement option:selected').val();
        id_equipement = id_eq;
        libEq = $('#select_equipement option:selected').text();



        //fre_displayEquipementByIdEquipement(id_eq);

        frea_displayAccessByIdEquipement(id_eq);
        frea_setLibEquipement(libEq);

        fre_displayEquipementFromCache(id_eq);
        // alert("1er "+id_eq);

    });


});

function fre_razUI() {
    $('#output_resumeResultat').html('');
    $('#select_equipement').html('');
    $('#constructeur').html('');
    $('#lib_equipement').val('');
    //  $('#mac_equipement').val(' ');
    $('#version_equipement').val(' ');
}

function fre_prepareUiToAdd() {


    id_equipement = $('#id_equipement').val();

    fre_razUI();

    fre_active_input();

    fre_afficheBtnValidAnnulle();


    fre_loadConstructeur();
    fre_displayConstructeur();
    fre_loadType();
    fre_displayType();
    //alert('fin traitement');

}

function fre_setLibCentral(libCentral) {
    //alert('passage');
    $('.lib_central').html(libCentral);
}

function fre_loadConstructeur() {
    $.ajax({
        method: 'GET',
        async: false,
        url: pathEquipement + 'getAllConstructeur',
        //  data: {'id_central':id_central},
        dataType: 'json', // on veut un retour JSON
        success: function (json) {
            var i = 0;

            $.each(json, function (index, value) { // pour chaque noeud JSON
                constructeurs[0][i] = value.id_constructeur;
                constructeurs[1][i] = value.lib_constructeur;

                i++;
            });




        },
        error: function () {


        }
    });
}

function fre_loadType() {
    $.ajax({
        method: 'GET',
        async: false,
        url: pathEquipement + 'getAllType',
        //  data: {'id_central':id_central},
        dataType: 'json', // on veut un retour JSON
        success: function (json) {
            var i = 0;

            $.each(json, function (index, value) { // pour chaque noeud JSON
                typeEquipement[0][i] = value.id_type;
                typeEquipement[1][i] = value.lib_type;

                i++;
            });




        },
        error: function () {


        }
    });
}

function fre_displayConstructeur() {
    //alert(constructeurs[0].length);
    for (i = 0; i < constructeurs[0].length; i++) {
        $('#constructeur').append("<option value=" + constructeurs[0][i] + ">" + constructeurs[1][i] + "</option>")

    }
}

function fre_displayType() {
    $('#type_equipement').attr('disabled', false);
    //alert('ici action');
    for (i = 0; i < typeEquipement[0].length; i++) {
        $('#type_equipement').append("<option value=" + typeEquipement[0][i] + ">" + typeEquipement[1][i] + "</option>");
    }
}

function fre_displayEquipementByIdCentral(id_central) {
    //je suppose ici que l'id a ete checke en amont
    // alert('refresh :'+id_central);

    //alert('id central: '+id_central);
    fre_razUI();
    fre_loadEquipementByIdCentral(id_central);
    //fre_loadType();

    var i;
  //  for (i = 0; i < equipements[0].length; i++) {
     index = equipements[0].indexOf(id_central);
  
      if(index!==-1)  {
        
        $('#select_equipement').append("<option value='" + equipements[0][index] + "'>" + equipements[1][index] + "</option>");
        //$('#constructeur').append("<option  value=ici>" + equipements[3][i] + "</option>");
        $('#constructeur').append("<option  value=" + equipements[2][index] + ">" + equipements[3][index] + "</option>");
        $('#type_equipement').append("<option  value='" + equipements[4][index] + "'>" + equipements[5][index] + "</option>");
        $('#version_equipement').val(equipements[6][index]);
        $('#num_serie_equipement').val(equipements[7][index]);


        //i++;
    }
    libEquipement = $('#select_equipement option:checked').text();
    $('#lib_equipement').val(libEquipement);

    //displayResultatDetail($('#select_equipement').val());
    id_eq = $('#select_equipement option:selected').val();
    id_equipement = id_eq;
    libEq = $('#select_equipement option:selected').text();
    frea_displayAccessByIdEquipement(id_eq);
    frea_setLibEquipement(libEq);

    //   displayResultatDetail(val.id_equipement);
    $('#output_resumeResultat').append("<br/><br/><b>" + equipements[0].length + " Equipement(s)</b>");
    //alert(i+" nombre d equipement");
    $('#id_equipement').val(id_eq);
    $('#lib_equipement').val(libEq);
    //$('#lienPDF').attr('href', "../form/formCentral.php?pdf=" + val.id_central);

}

function fre_loadEquipementByIdCentral(id_central) {
    //je suppose ici que l'id a ete checke en amont

    fre_razUI();

    $.ajax({
        method: 'GET',
        async: false, //TRES TRES IMPORTANT
        url: pathEquipement + 'getEquipements/' + id_central,
        //  data: {'id_central':id_central},
        dataType: 'json', // on veut un retour JSON
        success: function (json) {
            var i = 0;
            var val;
            equipements[0] = [];
            equipements[1] = [];
            equipements[2] = [];
            equipements[3] = [];
            equipements[4] = [];
            equipements[5] = [];
            equipements[6] = [];
            equipements[7] = [];
          
            //videZoneResultatPrincipal();   
            $.each(json, function (index, value) { // pour chaque noeud JSON

                equipements[0][i] = value.id_equipement;  //id_equipement
                equipements[1][i] = value.lib_equipement;  //lib_equiipement
                equipements[2][i] = value.id_constructeur;  //id_constructeur
                equipements[3][i] = value.lib_constructeur;  //lib_constructeur
               
                equipements[4][i] = value.id_type;  //id_type
                equipements[5][i] = value.lib_type;  //lib_type
                equipements[6][i] = value.id_version;  //version
                equipements[7][i] = value.num_serie;  //numserie  
                
               // alert(' equipements :'+index+ equipements[7][i]);
               // equipements[8][i] = value.id_constructeur;  //id_constructeur
                
                i++;
            });


        },
        error: function () {


        }
    });

}

function fre_displayEquipementFromCache(id_equipement) {

    index = equipements[0].indexOf(id_equipement);
    if (index !== -1) {
        //fre_razUI();
        //$('#select_equipement').append("<option>"++"</option>")
        $('#constructeur').html('');
        $('#constructeur').append("<option value="+ equipements[2][index]+">" + equipements[3][index] + "</option>");

        $('#lib_equipement').val('');
        $('#lib_equipement').val(equipements[1][index]);

        $('#version_equipement').val('');
        $('#version_equipement').val(equipements[6][index]);

        $('#num_serie_equipement').val('');
        $('#num_serie_equipement').val(equipements[7][index]);

        $('#type_equipement').html('');
        $('#type_equipement').append("<option>" + equipements[5][index] + "</option>");
        //alert('ici');


        //alert('ok'+equipements[3][index]);
    } else {

        alert("pas trouvé " + equipements[0].length);
    }
}

function fre_afficheEquipementSuivant() {
}

function fre_afficheEquipementPrecedent() {
}

function fre_active_input() {
    $('#select_equipement').attr('disabled', false);
    $('#constructeur').attr('disabled', false);
    $('#lib_equipement').attr('disabled', false);
    $('#mac_equipement').attr('disabled', false);
    $('#version_equipement').attr('disabled', false);
    $('#num_serie_equipement').attr('disabled', false);
    $('#type_equipement').attr('disabled', false);
}

function fre_desactive_input() {
    $('#select_equipement').attr('disabled', 'disabled');
    $('#constructeur').attr('disabled', 'disabled');
    $('#lib_equipement').attr('disabled', 'disabled');
    $('#mac_equipement').attr('disabled', 'disabled');
    $('#version_equipement').attr('disabled', 'disabled');
    $('#num_serie_equipement').attr('disabled', true);
    $('#type_equipement').attr('disabled', true);
}

function fre_afficheBtnValidAnnulle() {
    $('#btn_valid_modif_equipement').attr('style', 'visibilty:visible');
    $('#btn_annuler_modif_equipement').attr('style', 'visibilty:visible');
}

function fre_cacheBtnValidAnnulle() {
    $('#btn_valid_modif_equipement').attr('style', 'visibilty:hidden');
    $('#btn_annuler_modif_equipement').attr('style', 'visibilty:hidden');
}

function fre_gest_select_const() {
    id_eq = $('#select_equipement option:selected').val();
    alert(id_eq);
    id_equipement = id_eq;
    libEq = $('#select_equipement option:selected').text();


    //fre_displayEquipementByIdEquipement(id_eq);

    frea_displayAccessByIdEquipement(id_eq);
    frea_setLibEquipement(libEq);

}
function fre_addEquipement() {
    //id_eq = $('#id_equipement').val();
    lib_equipement = $('#lib_equipement').val();
    num_serie_equipement = $('#num_serie_equipement').val();
    version_equipement = $('#version_equipement').val();
    constructeur = $('#constructeur option:selected').val();
    id_type_equipement = $('#type_equipement option:selected').val();


    //alert(id_eq);
    $.ajax({
        method: 'POST',
        url: pathEquipement + 'addEquipement',
        data: {
            //'id_equipement': id_eq,
            'lib_equipement': lib_equipement,
            'constructeur': constructeur,
            'num_serie_equipement': num_serie_equipement,
            'version_equipement': version_equipement,
            'type_equipement': id_type_equipement
        },
        dataType: 'html', // on veut un retour JSON
        success: function (msg) {
            //alert('--'+num_serie_equipement+"--");
            alert(msg);
            // displayInfoPrincipalEquipement(id_central);
            fre_displayEquipementFromCache(id_eq);
            frea_displayAccessByIdEquipement(id_eq);

        }
    });
}
function fre_modifEquipement() {
    id_eq = $('#id_equipement').val();
    lib_equipement = $('#lib_equipement').val();
    num_serie_equipement = $('#num_serie_equipement').val();
    version_equipement = $('#version_equipement').val();
    constructeur = $('#constructeur option:selected').val();
    id_type_equipement = $('#type_equipement option:selected').val();
    //alert(id_eq);
    $.ajax({
        method: 'POST',
        url: pathEquipement + 'updateEquipement',
        data: {'id_equipement': id_eq,
            'lib_equipement': lib_equipement,
            'constructeur': constructeur,
            'num_serie_equipement': num_serie_equipement,
            'version_equipement': version_equipement,
            'type_equipement': id_type_equipement
        },
        dataType: 'html', // on veut un retour JSON
        success: function (msg) {
            //alert('--'+num_serie_equipement+"--");
            alert(msg);
            // displayInfoPrincipalEquipement(id_central);
            fre_displayEquipementFromCache(id_eq);
            frea_displayAccessByIdEquipement(id_eq);

        }, error: function () {
            // alert('test');
        }
    });


}
function fre_formulaire_est_valide() {
    //id_eq = $('#id_equipement').val();
    lib_equipement = $('#lib_equipement').val();
    num_serie_equipement = $('#num_serie_equipement').val();
    version_equipement = $('#version_equipement').val();
    constructeur = $('#constructeur option:selected').val();
    id_type_equipement = $('#type_equipement option:selected').val();

    if (lib_equipement !== "" &&
            num_serie_equipement !== "" &&
            version_equipement !== "" &&
            constructeur !== "" &&
            id_type_equipement !== "") {
        return true;
    } else
        return false;

}
