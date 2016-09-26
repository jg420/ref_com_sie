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

//liste de document
var listDocument = [];

//id docuement
listDocument[0] = [];

//lien document
listDocument[1] = [];

//lib document
listDocument[2] = [];

var id_document;
var index_document;

var new_doc = false;

var msgNoCentral = "Pas de central selectioné !";

var path_document = "http://127.0.0.1/ref_com_sie/web/app_dev.php/document/";

var path_upload= "http://127.0.0.1/ref_com_sie/web/";

$(document).ready(function () {
    $('#lien_document').val('http://www.google.fr/1.png')

    $('#btn_ajout_document').click(function () {
        if (frd_central_est_selectione()) {
            frd_prepare_a_ajouter();
            new_doc = true;
        }
    });

    $('#btn_sup_document').click(function () {

    });
    $('#btn_last_document').click(function () {
        if (frd_central_est_selectione()) {
            frd_affiche_doc_precedent();
        }
    });
    $('#btn_modif_document').click(function () {
        if (frd_central_est_selectione()) {
            if (listDocument[0].length !== 0) {
                frd_prepare_a_ajouter();
            } else {
                alert('Pas document selectionné');
            }

            new_doc = false;
        } else {
            alert(msgNoCentral);
        }
    });
    $('#btn_next_document').click(function () {
        if (frd_central_est_selectione()) {
            frd_affiche_doc_suivant();
            //alert('fin traitement next');
        } else
            alert('Pas de central selectione !');
    });
    $('#btn_valid_modif_document').click(function () {
        if (frd_central_est_selectione()) {
            if (new_doc) {
                //alert('debut ajout doc ');
                //alert('path_document : '+path_document);
                frd_ajoute_doc();
                //alert('fin ajout doc ');
            } else {

                frd_modifier_document();
            }
            frd_desactive_input();
            frd_cache_btn_annuller_valider();
        }
    });
    $('#btn_annuler_document').click(function () {

        frd_cache_btn_annuller_valider();
        frd_desactive_input();
        frd_affiche_doc_parId(id_document);
    });
});

function frd_central_est_selectione() {
    if (id_central !== '' & listCentral[0].length !== 0) {
        return true;
    } else
        return false;
}
function frd_affiche_doc_parId(id_document) {
    id = id_document + 0;
    index = listDocument[0].indexOf(id_document);
    //

    //alert(id_document);
    if (index !== -1) {
        id_document = listDocument[0][index];
        index_document = index;
        //alert('lib_document : '+listDocument[2][index]);
        $('#titreDocument').text("Documents  " +
                (index + 1) + "/" + listDocument[0].length
                );
        $('#lib_document').val(listDocument[2][index]);
        $('#lien_document').attr('href', listDocument[1][index]);
        $('#lien_document').text("Télécharger");

    } else {
        $('#titreDocument').text("Documents  ");
        frd_razUI();
        //    alert('pas de document trouvé ! ');
    }
}


function frd_charge_doc_par_id_central() {
    $.ajax({
        method: 'GET',
        async: false,
        url: path_document + 'getDocuments/' + id_central,
        dataType: 'json', // on veut un retour JSON
        success: function (json) {
            //alert('ok back end');
            var i = 0;
            var val;
            listDocument[0] = [];
            listDocument[1] = [];
            listDocument[2] = [];

            //videZoneResultatPrincipal();   
            $.each(json, function (index, value) { // pour chaque noeud JSON
                //$('#bloc_resultat_access').append(value.id_access);
                listDocument[0][i] = value.id_document;
                listDocument[1][i] = path_upload+""+value.lien_document;   //lib_access
                listDocument[2][i] = value.lib_document;   //login

                i++;
            });
        }
    });
}

function frd_charge_et_affiche_doc_par_id_central() {
    frd_charge_doc_par_id_central();
    frd_razUI();
    frd_affiche_doc_parId(listDocument[0][0]);
}

function frd_razUI() {
    $('#lib_document').val('');
    $('#lien_document').attr('href', '');
    $('#lien_document').text('');
    $('#file_document').val('');


}

function frd_prepare_a_ajouter() {
    //alert('passage ds prepare a ajouter')
    if (id_central !== '') {
        // alert('passage ds le if');
        frd_razUI();
        frd_active_input();
        frd_affiche_btn_annulle_valider();
    } else
        alert('pas de central selectioné ! ');
}


function frd_prepare_a_modifier() {
    if (frd_is_valid_document()) {
        frd_active_input();
        frd_affiche_btn_annulle_valider();
    }
}

function frd_affiche_doc_suivant() {

    index = index_document + 1;
    if (index <= listDocument[0].length) {
        $('#titreDocument').text("Documents  " +
                (index + 1) + "/" + listDocument[0].length);
        $('#lib_document').val(listDocument[2][index]);
         $('#lien_document').attr('href', listDocument[1][index]);
        $('#lien_document').text("Télécharger");
        $('#id_document').val(listDocument[0][index]);
        index_document=index;
    } else
        alert('pb');
}


function frd_affiche_doc_precedent() {
    index = index_document - 1;
    if (index >= 0) {
        $('#titreDocument').text("Documents  " +
                (index + 1) + "/" + listDocument[0].length
                );
        $('#lib_document').val(listDocument[2][index]);
         $('#lien_document').attr('href', listDocument[1][index]);
        $('#lien_document').text("Télécharger");
        $('#id_document').val(listDocument[0][index]);
         index_document=index;
    }
}

function frd_suppr_doc() {
}

function frd_modifie_doc() {
    id_document = $('#id_document');
    lib_document = $('#lib_document');
    lien_document = $('#lien_document');

    $.ajax({
        method: 'POST',
        url: path_document + 'modifDocument',
        data: {'id_document': id_document,
            'lib_document': lib_document,
            'lien_document': lien_document
        },
        dataType: 'html', // on veut un retour JSON
        success: function (msg) {
            alert(msg);
            frd_charge_et_affiche_doc_par_id_central(id_central);

        }, error: function () {
            // alert('test');
        }
    });

}

function frd_ajoute_doc() {
    
    //verification du nom avant d ajouter 
    lib_document = $('#lib_document').val(); 
    
    lien_document = $('#lien_document').val();
    
    document = $('#file_document').val();

    var form = document.getElementById("form_doc");
    data_doc = new FormData(form);
    //data_doc.append('file',document);
    //alert('fin declaration');

    //alert('path_document : '+path_document);
    $.ajax({
        method: 'POST',
        url: path_document + 'add_document',
        data: data_doc,
        /*  'lib_document': lib_document,
         'lien': lien_document  },*/
        async: false,
        cache: 'cache',
        contentType: false,
        processData: false,
        //   dataType: 'html', // on veut un retour JSON
        success: function (id_doc) {
            //alert('id doc : '+id_doc);
            frd_ajoute_doc_central(id_doc, lib_document, id_central);
            // displayInfoPrincipalEquipement(id_central);
            frd_charge_et_affiche_doc_par_id_central(id_central);

        }, error: function () {

        }


    });

}

function frd_ajoute_doc_central(id_doc, lib_document, id_central) {
    $.ajax({
        method: 'POST',
        url: path_document + 'add_document_central',
        data: {'id_doc': id_doc,
            'lib_doc': lib_document,
            'id_central': id_central},
        /*  'lib_document': lib_document,
         'lien': lien_document  },*/
        async: false,
        dataType: 'html', // on veut un retour JSON
        success: function (request) {
            //alert('request : ' + request);
            alert('Document ajouté avec succés : ' );

        }, error: function () {

        }


    });
}

function frd_affiche_btn_annulle_valider() {
    $('#btn_valid_modif_document').attr('style', 'visibility:visible');
    $('#btn_annuler_document').attr('style', 'visibility:visible');
}

function frd_cache_btn_annuller_valider() {
    $('#btn_valid_modif_document').attr('style', 'visibility:hidden');
    $('#btn_annuler_document').attr('style', 'visibility:hidden');
}

function frd_active_input() {
    $('#file_document').attr('disabled', false);
    $('#lib_document').attr('disabled', false);
}

function frd_desactive_input() {
    $('#file_document').attr('disabled', true);
    $('#lib_document').attr('disabled', true);
}