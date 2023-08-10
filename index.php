<html>
  <head>
    <title>AJAX Quotes</title>
    <style>

    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz@10..48&family=Roboto:wght@100&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz@10..48&family=REM:wght@100&family=Roboto:wght@100&display=swap');
      
    /* CSS to hide the quote container initially and apply fade-in animation */
      #quoteContainer {
            display: none;
            text-shadow: 4px 4px 4px #aaa;
      }

        /* CSS for the fade-in animation */
        .fade-in {
            animation: fadeIn 1s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
      
    </style>
  </head>
  <body>
    <h1>AJAX Quotes</h1>
    <p><em>This code implements an AJAX-based random quote generator that displays inspiring quotes by Kobe Bryant every 5 seconds. It begins by importing three variable Google fonts - Roboto, REM, and Bricolage Grotesque. The quote container is initially hidden with CSS and will fade in when a new quote is loaded. In JavaScript, an XMLHttpRequest fetches a random Kobe Bryant quote from random_quotes.php every 5 seconds. When the response succeeds, the new quote is displayed inside the quote container, made visible, and styled with a random font family from the imported fonts. This varies the visual style with each new quote. The quote also fades in for 1 second via a CSS animation when loaded. If the request fails, an error message is shown instead of the quote. The getRandomQuote() function runs every 5 seconds to continuously fetch and display inspirational Kobe Bryant quotes with transitions between different fonts.</p></em>
    
    
    <p>An inspiring quote by Kobe Bryant is generated every 5 seconds</p>
    <div id="quoteContainer">Quotes go here</div>
    <script>

      var counter = 0;
      function getRandomQuote(){

        var fonts = ["Roboto","REM","Bricolage Grotesque'"];
        
        var xhr = new XMLHttpRequest();

        //target the server page
        xhr.open('GET','random_quotes.php',true);


        xhr.onload = function(){
          //code on return of data goes here
          if(xhr.status >= 200 && xhr.status < 300){//good data returned, show it!
            //document.querySelector("#quoteContainer").innerText = xhr.responseText;
            
            var quoteContainer = document.querySelector("#quoteContainer");

            //retrieve text from php page
            quoteContainer.innerText = xhr.responseText;
            //make element visible
            quoteContainer.style.display = "block";

            //add font family
            quoteContainer.style.fontFamily = fonts[counter]
            counter++;
            if(counter >= fonts.length){
              counter = 0;
            }
                        
            //add fade in class
            quoteContainer.classList.add("fade-in");

            setTimeout(function(){
              quoteContainer.classList.remove("fade-in");
            },1000);

          }else{//something went wrong, give feedback
            document.querySelector("#quoteContainer").innerText = "Failed to fetch quote: " + xhr.status;
          }
        };
        
        xhr.onerror = function(){
          //code on return of data goes here
          alert("uh-oh! We've recevied an XHR error!");
        };

        //sends data to server
        xhr.send();      
        
      }
      function displayRandomQuote(){
        //retrieve quote
        getRandomQuote();

        //run every 5 seconds
        setInterval(getRandomQuote,5000);
      }
      displayRandomQuote();

      
    </script>
  </body>
</html>
