$(document).ready(function() {
    $('#action').click(function() {

        var letterGrade = $('#letter-grade').val().toUpperCase();
        var myFavoriteThings = [];
            myFavoriteThings.push("Swimming");   
            myFavoriteThings.push("Biking"); 
            myFavoriteThings.push("Gaming"); 
            myFavoriteThings.push("Watching Movies"); 

        //Write your decision structure between this comment...
        if (letterGrade =='A'){
            $('#decision-holder').text('Grade range for A: 90% to 100%');    
        }
        else if(letterGrade =='B'){
            $('#decision-holder').text('Grade range for B: 80% to 89%');    
        }
        else if (letterGrade =='C'){
            $('#decision-holder').text('Grade range for C: 70% to 79%');    
        }
        else if (letterGrade =='D'){
            $('#decision-holder').text('Grade range for D: 60% to 69%');    
        }
        else if (letterGrade =='F'){
            $('#decision-holder').text('Grade range for F: Less than 60%');    
        }
        else{
            $('#decision-holder').text('Error! Invalid value entered');    
        }                                
        //...and this comment

        //Now, write a for, while, OR do-while loop between this comment...
        var counter = 1;
        var x = 0;
        while (counter <= myFavoriteThings.length){
            counter++;
            $('#loop-output').append(myFavoriteThings[x] + "<br>");
            x++;
        }
       //...and this comment


        //Use the jQuery .each() method to loop through
        //the myFavoriteThings array between this comment...
        $.each(myFavoriteThings, function(index, val) {
            $('#each-output').append(val + "<br>");
        }); 
        //...and this comment

    });
});
