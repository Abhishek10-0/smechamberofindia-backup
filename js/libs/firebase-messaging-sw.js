// Import and configure the Firebase SDK
// These scripts are made available when the app is served or deployed on Firebase Hosting
// If you do not serve/host your project using Firebase Hosting see https://firebase.google.com/docs/web/setup
importScripts('https://www.gstatic.com/firebasejs/5.10.1/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/5.10.1/firebase-messaging.js');
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyBQGz60NoQY0nwVA5u2I8aCpao4WU9BO9E",
    authDomain: "smechamberofindia-321f4.firebaseapp.com",
    databaseURL: "https://smechamberofindia-321f4.firebaseio.com",
    projectId: "smechamberofindia-321f4",
    storageBucket: "smechamberofindia-321f4.appspot.com",
    messagingSenderId: "235711516161"
  };
  firebase.initializeApp(config);

var messaging = firebase.messaging();

/**
 * Here is is the code snippet to initialize Firebase Messaging in the Service
 * Worker when your app is not hosted on Firebase Hosting.

 // [START initialize_firebase_in_sw]
 // Give the service worker access to Firebase Messaging.
 // Note that you can only use Firebase Messaging here, other Firebase libraries
 // are not available in the service worker.
 //importScripts('https://www.gstatic.com/firebasejs/4.8.1/firebase-app.js');
 //importScripts('https://www.gstatic.com/firebasejs/4.8.1/firebase-messaging.js');

 // Initialize the Firebase app in the service worker by passing in the
 // messagingSenderId.
 //firebase.initializeApp({
 //  'messagingSenderId': 'YOUR-SENDER-ID'
 //});

 // Retrieve an instance of Firebase Messaging so that it can handle background
 // messages.
 //const messaging = firebase.messaging();
 // [END initialize_firebase_in_sw]
 **/


// If you would like to customize notifications that are received in the
// background (Web app is closed or not in browser focus) then you should
// implement this optional method.
// [START background_handler]
var url="";
messaging.setBackgroundMessageHandler(function(payload) {
  console.log('[firebase-messaging-sw.js] Received background message ', payload);
  // Customize notification here
	 var notificationTitle = payload.data.title;
	 var notificationOptions = {
		  body: payload.data.body,
		  icon: payload.data.icon,
		  tag: payload.data.tag
	  };
	  url = payload.data.tag;
	  console.log("URL:"+url);

  return self.registration.showNotification(notificationTitle,
    notificationOptions);
});

  self.addEventListener('notificationclick', function(event) {
						console.log(event.notification);
						console.log("notification link:"+event.notification.tag);
						console.log("notification link:"+event.notification.data.tag);
						console.log("notification URL:"+url);
						var tag = event.notification.tag;
						event.notification.close(); // Android needs explicit close.
						event.waitUntil(
							clients.openWindow(tag)
						);
					});
// [END background_handler]