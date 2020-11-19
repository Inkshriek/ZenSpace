<?php
    include("extern/database.php");
    
    if (!isset($_SESSION["loggedin"]) || !$_SESSION["loggedin"]) {
      header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ZenSpace - Guides</title>
        <meta name="description" content="Meditation and Work/Life Guidance for Students">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/main.css" >
        <link rel="stylesheet" type="text/css" href="css/guides.css" >
    </head>

    <body>
    
    <script>
      function addTask(content) {
        location.replace("extern/addtask.php?content=" + content + "");
      }
      
    </script>
    <div id="header">
            <div class="sidebar">
                <img src = "img/Logo.png" style="width:150px;height:150px;" alt = "logo of zenspace"/>
              <ul id="nav">
            <li><a href="index.php">Today</a></li>
            <li id = "Selected">Guides</li>
            <li><a href="journals.php">Journals</a></li>
            <li><a href="medals.php">Medals</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
    </div>
        <div id="main">
          <br />
          <form name="panelwide" id="search" action="/search.php">
            <input type="text" id="searchtext" name="searchtext" size={30} placeholder="Search Guides, Tasks, Journals, etc." required />
            <input type="submit" defaultValue="Search" />
          </form>
          <br />
          <div id= "guides">
            <h2>Guides</h2>
            <ul>

                <h3>Meditation</h3>
                <div>Meditation has been used throughout many centuries as a way to hone your focus and even reduce your stress. Learning to focus can reduce your perceived stress as well as enlighten your mood. One of the techniques to meditate is called, “Mindfulness meditation” and it relies on focusing on your breathing, mind, and body. It sounds like it’s a lot of work, but it can reduce stress and it has been found to be effective at reducing stress.
                  Mindful meditation instructions
                  Shift the focus from the outer world to yourself
                  Cross your legs, straighten your back
                  Be aware of your breath, thoughts, and mind
                  Remove negative thoughts from your mind
                  Keep yourself in the present, do not think of the past or future
                  Begin to inhale and exhale and focus on that and clear your mind.
                  </div>
                  <h3>Imagery meditation</h3>
                    <iframe title = "Video about imagery meditation" width="560" height="315" src="https://www.youtube.com/embed/inpok4MKVLM" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                    </iframe>
                    </li>
                    </ul>
                    <ul>
                    <h3>Instructions</h3>
                    <ol>
                      <li>Shift your attention to your breathing</li>
                      <li>Breath in and out of your mouth</li>
                      <li>Expand your lungs and be in the present</li>
                      <li>Thank your body for the hard work and tell yourself it's okay to relax</li>
                      <li>Think of any good things that have happened and try to remember it</li>
                      <li>Smile, and think of how to continue being happy</li>
                      <li>Breath in and out of your mouth</li>
                      <li>Take a deep breath two times and hold it for 2 seconds and exhale for 3 seconds</li>
                      <li>Bring yourself to the present and thank yourself for doing this to be happier</li>
                    </ol>
                    </ul>
                    <br />
                    <button onclick="addTask('Perform Imagery Meditation')">Add To Tasks!</button>
                </ul>
              </li>
              <li className="category" id="meditation">
                <h3>Relaxation</h3>
                <div>Relaxation is something we could all benefit from after a stressful day or even a long day at work. We want to guide you to a relaxed state and release your stress. One of the various ways to relax is to adjust your thinking and see things a bit different. If you have 3 quizzes within the same week you might become stressed with the thought of its impact on your grades. Instead of seeing it as 3 quizzes within the same week, think of it as 3 quizzes that you can take when you want to. Remember there are 24 hours in a day, try to dedicate 30 minutes to yourself if you are busy to relax. Here are a couple ways to relax
                  </div>
                <ul>
                  <h3>Relaxation techniques</h3>
                    <iframe title = "Video about relaxation techniques" width="560" height="315" src="https://www.youtube.com/embed/IQwqVe-BCek" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                      </iframe>
                    </ul>
                    <ul>
                      <h3>Instructions</h3>
                      <h4>Breathing</h4>
                    <ol>
                      <li>Take a deep breath in through your nose</li>
                      <li>Hold it for 2 seconds</li>
                      <li>Exhale through your mouth</li>
                      </ol>
                      <h4>Tighten and relax</h4>
                      <ol>
                      <li>Relax your body</li>
                      <li>Tighten your muscles</li>
                      <li>Release and move on</li>
                      </ol>
                      <h4>Clear your mind</h4>
                      <ol>
                      <li>Find a quiet spot in person or in your mind</li>
                      <li>Focus on a peaceful location</li>
                      <li>Concentrate on the area</li>
                    </ol>
                    </ul>
                    <br />
                    <a href="javascript:alert('Test');">Add To Tasks!</a>
                </ul>
                <hr>
                <h3>Sleep</h3>
                <div>Sleep, we all need it, but we can’t sleep sometimes because of various reasons. Some people have sleep apnea or even suffer from insomnia which makes it difficult to sleep. There are various techniques to help you sleep and even improve your sleep cycle. One of the most common ways people are able to sleep when they are struggling is to take melatonin pills. Melatonin is inside your body and helps control your body's sleep cycle. Taking a melatonin pill will make it easier to sleep depending on the dosage you require. Below are some ways to improve your sleep and videos that will aid you
                  </div>
                <ul>
                    <h3>Military sleep method</h3>
                    <iframe title = "Military method to aid with sleep" width="560" height="315" src="https://www.youtube.com/embed/FWGuy4oOQgQ" 
                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                     allowfullscreen>
                     </iframe>
                     <h4>Instructions</h4>
                    <ol>
                      <li>Relax your face</li>
                      <li>Drop your shoulders and let them come down to release tension</li>
                      <li>Exhale and relax your chest, legs, thighs, and calves</li>
                      <li>Imagine a relaxing place for 10 seconds and repeat if needed.</li>
                      </ol>
                      <h3><strong>4-7-8 Sleep technique instructions</strong></h3>
                      <iframe title = "Video about relaxation techniques" width="560" height="315" src="https://www.youtube.com/embed/1Dv-ldGLnIY" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture">
                    </iframe> 
                    <h3>Instructions</h3>
                      <ol>
                      <li>Count to 4 in your head</li>
                      <li>Hold your breath for 7 seconds</li>
                      <li>Exhale for 8 seconds</li>
                      <li>Imagine a relaxing place for 10 seconds and repeat if needed.</li>
                      </ol>
                    <br />
                    <a href="javascript:alert('Test');">Add To Tasks!</a>
                </ul>
                <hr>
                <h3>Class Tips</h3>
                <div>The year 2020 has been one of the most hectic years for you I bet, switching to online classes within a few weeks has been stressful for millions of students being thrown into online classes. Zoom is being used around the globe to hold meetings for classes as a substitute for in person meetings. As a student you will need to know mainly the basics to use zoom, you can download the app on your computer or phone. Another thing to be ready for online classes is to organize a schedule for the dates you have things due. You could even put a sticky note on your refrigerator to remind yourself to get the work done. </div>
                <ul className="guideslist">
                    <h4><strong>Zoom tips for joining class</strong></h4>
                    <iframe title = "Video about relaxation techniques" width="560" height="315" src="https://www.youtube.com/embed/ZWkdsgTlbeM" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture">
                    </iframe> 
                    <ol>
                      <li>Sign up for an account</li>
                      <li>Click the join button and enter the meeting code given by your teacher</li>
                      <li>Adjust preferences with video and microphone before entering</li>
                      </ol>
                      <h4><strong>Zoom tips while inside a class meeting</strong></h4>
                      <ol>
                      <li>You can chat directly clicking the three dots at the bottom of the screen and click chat.</li>
                      <li>Once in chat you can respond to the professor using symbols like “Yes , No, Go faster, Go slower” without speaking verbally”.</li>
                      <li>You can mute and unmute yourself and also turn on and turn off the video camera.</li>
                      <li>If you would like to share your screen click share screen at the bottom and click on the page you would like to share.</li>
                      <li>If you are shy about speaking in classes you could send a message instead or send messages privately.</li>
                    </ol>
                    <br />
                    <a href="javascript:alert('Test');">Add To Tasks!</a>
                </ul>
              </li>
          </div>
          <br />
    </div>
        <div id="footer">
          <p>Bare in mind, to use ZenSpace to the fullest, JavaScript and CSS should always be enabled. By using ZenSpace, you agree to the usage of cookies.</p>
          <p>ZenSpace is Powered by PHP.</p>
      </div>
    </body>

</html>