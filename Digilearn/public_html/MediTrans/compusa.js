$(function() {
  const config = {
    apiKey: "AIzaSyDyQXi4K8M0lp0R7qb0qDh-l3jpqzTGZAI",
    authDomain: "barcodelite.firebaseapp.com",
    databaseURL: "https://barcodelite.firebaseio.com",
    projectId: "barcodelite",
    storageBucket: "barcodelite.appspot.com",
    messagingSenderId: "691064452985"
  };
  firebase.initializeApp(config);

  $('.js-form').on('submit', event => {
    event.preventDefault();
    const email = $('#email').val();
    const Companyname = $('#cname').val();
    const Description = $('#textt').val();
    const Url = $('#url').val();
    const Website = $('#cweb').val();
    const hf = $('#hf').val();
    const exp = $('#exp').val();
    const phone = $('#phone').val();
   // const country = $('input[name=optradio]:checked').val();
   const country="USA";
   
    console.log( Url,
      email,
      Companyname,
      Description,
      Website,
      hf,
      exp,
      phone,
      country);
      firebase.auth().signInWithEmailAndPassword("burningsearch@gmail.com", "hohoho")
      .then(user => {
        $('#oool').addClass('hidden');
        $('#genbutton').addClass('hidden');
        firebase.database().ref('Message/Com/USA').push({
          Url,
          email,
          Companyname,
          Description,
          Website,
          phone,
          hf,
          exp,
          country
        });
		
        $('#olopo').removeClass('hidden');
      })
      .catch(error => {
        console.log(error);
      });
    });
  }); // Initialize Firebase
