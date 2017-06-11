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
    const Description = $('#textt').val();
    const Name = $('#name').val();
    const Url = $('#url').val();
  const Worked = $('#cweb').val();
  const WorkType = $('#hf').val();
    const Exp = $('#exp').val();
    const phone = $('#phone').val();
   // const country = $('input[name=optradio]:checked').val
   const country="USA";
    console.log( Name,
      email,
      Url,
      Description,
      Worked,
      WorkType,
      Exp,
      phone,
      country);
      firebase.auth().signInWithEmailAndPassword("burningsearch@gmail.com", "hohoho")
      .then(user => {
        $('#oool').addClass('hidden');
        $('#genbutton').addClass('hidden');
        firebase.database().ref('Message/Man/USA').push({
          Name,
          email,
          Url,
          Description,
          Worked,
          phone,
          WorkType,
          Exp,
          country
        });
        $('#olopo').removeClass('hidden');
      })
      .catch(error => {
        console.log(error);
      });
    });
  }); // Initialize Firebase
