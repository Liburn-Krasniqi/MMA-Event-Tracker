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
    include 'C:\xampp\htdocs\zTmijat\MMA-Event-Tracker\phpIncluda\eventat.php';
?>

    <main>
        

        
        <div class="UpcomingEvents">
            <h2 class="EventPreview">UpcomingEvents</h2>
            <?php       
                                $db=new Eventdb;
                                $eventet=$db->getAllEvents();
                                $id=1;
                                foreach ($eventet as $event){
                                    echo  "
                                    <article class='EventPreview' id=\"event$id\" >
                                        <p>$event[1]</p>
                                    <p class='mainF_Table'>$event[4]</p>
                                    <p>$event[3]</p>
                                    <p>$event[2]</p>
                                </article>
                                   
                                ";
                                    $id++;
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
                <?php
                $event=new Eventdb();
                $fights=$event->getFights(1);
                echo $fights[0][12];
                
                foreach($fights as $f){
                    
                     echo `<div class="fight">
                     <div class="fighter Fleft">
                         <div class="name">
                             <b>$f[3]</b> 
                             <p>Record</p>
                             <img src="$f[11]" alt="Jon jones">
                         </div>
                         
                         <div class="desc fighter">
                             <p>Height:$f[4]</p>
                             <p>Weight:$f[5]</p>
                             <p>Reach:$f[6]</p>
                         </div>
                     </div>
                     <p class="weightDiv fighter">$f[2]</p>
                     <div class="fighter Fright">
                     
                         <div class="name">
                             <img src="$$f[12]" alt="Jon jones">
                             <b>$f[7]</b> 
                             <p>Record</p>
                            
                         </div>
                         <div class="desc fighter">
                             <p>Height:$f[8]</p>
                             <p>Weight:$f[9]</p>
                             <p>Reach:$f[10]</p>
                         </div>
     
                     </div>
                     
                     
     
                 </div>
                 ` 
                     
                     ;
                 }
                ?>
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
        alert(eventID);
        //console.log(e.target.closest('article').id);
        var fighti =document.querySelector('.Event');
        fighti.innerHTML='';
        
         if(eventID === 'event1') {
             console.log('epara');

             <?php
             $event=new Eventdb();
             $fights=$event->getFights(1);
             $fightsa=[];
             foreach($fights as $fight){
                 $fights[]=$fight;
             }
             $json = json_encode($fightsa);
             
             ?>
            var fights=<?php echo"$json"; ?>;
            fights.foreach(function(f){
                addFight(f[2],f[3],f[4],f[5],f[6],f[7],f[8],f[9],f[10],f[11],f[12],f[13]);

            });
            addFight(fightsa,fighteri2,'hw');
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
           
}          function addFight(weightdiv,f1name,f1height,f1weight,f1reach
                f2name,f2height,f2weight,f2reach,f1img,f2img){
                var fighti =document.querySelector('.Event');
     
                fighti.innerHTML+=`<div class="fight">
                    <div class="fighter Fleft">
                        <div class="name">
                            <b>${f1name}</b> 
                            <p>Record</p>
                            <img src="${f1img}" alt="Jon jones">
                        </div>
                        
                        <div class="desc fighter">
                            <p>Height:${f1height}</p>
                            <p>Weight:${f1weight}</p>
                            <p>Reach:${f1reach}</p>
                        </div>
                    </div>
                    <p class="weightDiv fighter">${weightdiv}</p>
                    <div class="fighter Fright">
                    
                        <div class="name">
                            <img src="${f2img}" alt="Jon jones">
                            <b>${f2name}</b> 
                            <p>Record</p>
                           
                        </div>
                        <div class="desc fighter">
                            <p>Height:${f2height}</p>
                            <p>Weight:${f2weight}</p>
                            <p>Reach:${f2reach}</p>
                        </div>
    
                    </div>
                    
                    
    
                </div>
                `
                
                
            }
     </script>
     
    
</body>
</html>