jQuery(document).ready(function($) {
    //$(".button.left").click( function() 
    $(document).on('click', '.button.left', function()     
    { 
        $(".randomFacts").empty();
        
        var facts = new Array("I can lift 200 lbs 5 times",
        "I have naturally curly hair", 
        "I lived in Russia, Ukraine, China and US", 
        "I walk 10000 steps every day", 
        "I am a Buddhist",
        "I am still afraid of the dark, especially when I let my imagination run wild",
        "I am completely a cat person",
        "I need 3 things for complete happiness: food, computer and gym",
        "I speak Russian, Ukrainian, English and basic Chinese",
        "I traveled to 23 contries but still think this is too few",
        "I was born in Moscow, Russia",
        "I studied Thai massage and still practice a little", 
        "I used to play bass guitar, but completely forgot how to do it", 
        "I am 100% Mac person", 
        "I used to hang out with rock musicians a lot ", 
        "I am completely in love with airplanes and civil aviation", 
        "My favourite meal ever is pizza", 
        "I cannot sirvive without coffee. Tried a few times", 
        "I have a degree in journalism and I spent some time working as a news reporter", 
        "I can blind type fast in English and Russian", 
        "I dream on working for a big start up", 
        "Logic teacher at univercity said I have a mentality of a man. I think he was kinda right", 
        "I can quickly do sums in my head", 
        "I have an affinity for bad jokes and puns", 
        "Information is my second food. I can easily find myself reading stuff on weird topics", 
        "I spent hundreds of hours on Russian long-distance overnight trains", 
        "I swam in the Baikal lake in January at -40C / -80F", 
        "I can easily talk on almost any topic", 
        "I grew up in a country which has 6 winter month with snow and all stuff", 
        "My favourite TV show ever is Trailer Park Boys", 
        "I rode electric scooter in China for over a year", 
        "I can make Chinese tea ceremony");
        
        
        function shuffle(array) {
            var currentIndex = array.length, temporaryValue, randomIndex ;

            // While there remain elements to shuffle...
            while (0 !== currentIndex) {

              // Pick a remaining element...
              randomIndex = Math.floor(Math.random() * currentIndex);
              currentIndex -= 1;

              // And swap it with the current element.
              temporaryValue = array[currentIndex];
              array[currentIndex] = array[randomIndex];
              array[randomIndex] = temporaryValue;
            }

            return array;
        }
      
        var threeFacts = new Array();
        
        shuffle(threeFacts);
        
        function isNotFull($arr) //three facts for click
        {
            if($arr.length < 3)
                return true;
        }
        
        
        $(".randomFacts").append("<ul>");
        
         for(i=0; i<facts.length; i++)
        {
            if(isNotFull(threeFacts))
            {
                var randomNumber = Math.floor ( Math.random() * facts.length );
                var randomFact = facts[randomNumber];
                randomFact.toString();
               if ($.inArray(randomFact, threeFacts) === -1) threeFacts.push(randomFact); //check for repeating facts
            }
            else break;
        }
        
        for(i=0; i < threeFacts.length; i++)
        {
           $(".randomFacts ul").append("<li>");
           $(".randomFacts ul li").last().append(threeFacts[i]);
        }
      
        $(".randomFacts").fadeIn("slow").css("display:block");
    
    
    });

});