var config = {
  apiKey: "AIzaSyB5HHwA_zxO3wf4xg-XTff3atgE6_y412s",
  authDomain: "mercysmart-28430.firebaseapp.com",
  databaseURL: "https://mercysmart-28430.firebaseio.com",
  projectId: "mercysmart-28430",
  storageBucket: "mercysmart-28430.appspot.com",
  messagingSenderId: "463175321838"
};
firebase.initializeApp(config);
var database = firebase.database();

// Inputs
var nama = $('#nama').val(),
    email = $('#email').val(),
    pesan = $('#pesan').val();

function kirimPesan() {
  'use strict';
  if (nama == '') {
      alert("Nama tidak boleh kosong");
  } else if (hp == '') {
    alert("Nomor HP tidak boleh kosong")
  } else if (alamat == '') {
    alert("Alamat tidak boleh kosong")
  } else {
    firebase.database().ref('pesan/').push()({
        nama: nama,        
        email: email,
        pesan: pesan
     });

    console.log(sended)
  }
}