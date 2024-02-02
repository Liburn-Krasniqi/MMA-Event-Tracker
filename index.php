<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MMA-tracker</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
<?php include 'heder.php' ;
    include 'C:\xampp\htdocs\zTmijat\MMA-Event-Tracker\phpIncluda\usera.php';
?>

    <main>
        

        </div>
        <div class="UpcomingEvents">
            <h2 class="EventPreview">UpcomingEvents</h2>
            <?php       
                                $db=new Userdb;
                                $eventet=$db->getAllEvents();
                                foreach ($eventet as $event){
                                    echo  "
                                    <article class='EventPreview'  >
                                        <p>$event[1]</p>
                                    <p class='mainF_Table'>$event[4]</p>
                                    <p>$event[3]</p>
                                    <p>$event[2]</p>
                                </article>
                                    ";
                                }
                                ?>

            <!-- <article class="EventPreview" id="event1" >
                <p>UFC296</p>
                <p class="mainF_Table">Colby Covington vs Leon Edwards</p>
                 <p>December, 13th, 2024 </p>
                 <p>New york</p>
            </article>
            
            <article class="EventPreview" id="event2">
                <p>UFC296</p>
                <p class="mainF_Table">Colby Covington vs Leon Edwards</p>
                 <p>December, 13th, 2024</p>
                 <p>New york</p>
            </article>

            <article class="EventPreview" id="event3">
                <p>UFC296</p>
                <p class="mainF_Table">Colby Covington vs Leon Edwards</p>
                 <p>December, 13th, 2024</p>
                 <p>New york</p>
            </article> -->
        </div>
        
            <div class="Event">
                <div class="fight">
                    <div class="fighter Fleft">
                        <div id="name1" class="name">
                            <b>Alex perier</b> 
                            <p>22-10-2</p>
                            <img src="AlexP.jfif" alt="Jon jones">
                        </div>
                        
                        <div class="desc fighter">
                            <p>Height:186cm</p>
                            <p>Weight:90kg</p>
                            <p>Reach:75inch</p>
                        </div>
                    </div>
                    <p class="weightDiv fighter">Heavy Weight</p>
                    <div class="fighter Fright">
                    
                        <div class="name">
                            <img src="AlexP.jfif" alt="Jon jones">
                            <b>Jon Jones</b> 
                            <p>22-10-2</p>
                           
                        </div>
                        <div class="desc fighter">
                            <p>Height:186cm</p>
                            <p>Weight:90kg</p>
                            <p>Reach:75inch</p>
                        </div>
    
                    </div>
                    
                    
    
                </div>
                <div class="fight">
                    <div class="fighter Fleft">
                        <div class="name">
                            <b>Alex perier</b> 
                            <p>22-10-2</p>
                            <img src="AlexP.jfif" alt="Jon jones">
                        </div>
                        
                        <div class="desc fighter">
                            <p>Height:186cm</p>
                            <p>Weight:90kg</p>
                            <p>Reach:75inch</p>
                        </div>
                    </div>
                    <p class="weightDiv fighter">Heavy Weight</p>
                    <div class="fighter Fright">
                    
                        <div class="name">
                            <img src="AlexP.jfif" alt="Jon jones">
                            <b>Jon Jones</b> 
                            <p>22-10-2</p>
                           
                        </div>
                        <div class="desc fighter">
                            <p>Height:186cm</p>
                            <p>Weight:90kg</p>
                            <p>Reach:75inch</p>
                        </div>
    
                    </div>
                    
                    
    
                </div>
                
             
                
    
        </div>
    </main>
   
   
    
    <?php include 'hFooter.php' ?>
     <button id="back-to-top-btn"><i class="fa-solid fa-arrow-up"></i></button>
     <script src="generate-hed-fot.js" ></script>
     <script src="app.js"></script>

     <script>
         
         document.querySelectorAll('.UpcomingEvents .EventPreview').forEach(row => {
            row.addEventListener('click', displayEvent);
        });
        var fighteri1=['Alex Pereira',"22-3-0",'187','87','72'];
            var fighteri2=['Tom Aspinall',"7-3-0",'182','88','74'];
        function displayEvent(e) {
            //console.log(e.target);
        var eventID = e.target.closest('article').id;
        //console.log(e.target.closest('article').id);
        var fighti =document.querySelector('.Event');
        fighti.innerHTML='';
        
         if(eventID === 'event1') {
             console.log('epara');
             
            addFight(fighteri1,fighteri2,'hw');
            addFight(fighteri1,fighteri2,'hw');
            
         } else if(eventID === 'event2') {   
            
            addFight(fighteri1,fighteri2,'hw');
            addFight(fighteri2,fighteri2,'hw');
            }else if(eventID ==='event3') {
                addFight(fighteri1,fighteri2,'hw');
            addFight(fighteri1,fighteri2,'hw');
            addFight(fighteri1,fighteri2,'hw');
            addFight(fighteri1,fighteri2,'hw');
            }
           
}          function addFight(fighter1,fighter2,weight){
                var fighti =document.querySelector('.Event');
     
                fighti.innerHTML+=`<div class="fight">
                    <div class="fighter Fleft">
                        <div class="name">
                            <b>${fighter1[0]}</b> 
                            <p>${fighter1[1]}</p>
                            <img src="AlexP.jfif" alt="Jon jones">
                        </div>
                        
                        <div class="desc fighter">
                            <p>Height:${fighter1[2]}</p>
                            <p>Weight:${fighter1[3]}</p>
                            <p>Reach:${fighter1[4]}</p>
                        </div>
                    </div>
                    <p class="weightDiv fighter">${weight}</p>
                    <div class="fighter Fright">
                    
                        <div class="name">
                            <img src="AlexP.jfif" alt="Jon jones">
                            <b>${fighter2[0]}</b> 
                            <p>${fighter2[1]}</p>
                           
                        </div>
                        <div class="desc fighter">
                            <p>Height:${fighter2[2]}</p>
                            <p>Weight:${fighter2[3]}</p>
                            <p>Reach:${fighter2[4]}</p>
                        </div>
    
                    </div>
                    
                    
    
                </div>
                `
                
                
            }
     </script>
     
    
</body>
</html>