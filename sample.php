<!DOCTYPE html>
<html>
   <head>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
      </script>
      <script>
         function functionConfirm(msg, myYes, myNo) {
            var confirmBox = $("#confirm");
            confirmBox.find(".message").text(msg);
            confirmBox.find(".yes,.no").unbind().click(function() {
               confirmBox.hide();
            });
           confirmBox.find(".yes").click(myYes);
           confirmBox.find(".no").click(myNo);
           confirmBox.show();
         }
      </script>
      <style>
         #confirm {
            display: none;
            background-color: #91FF00;
            border: 1px solid #aaa;
            position: fixed;
            width: 250px;
            left: 50%;
            margin-left: -100px;
            padding: 6px 8px 8px;
            box-sizing: border-box;
            text-align: center;
         }
         #confirm button {
            background-color: #48E5DA;
            display: inline-block;
            border-radius: 5px;
            border: 1px solid #aaa;
            padding: 5px;
            text-align: center;
            width: 100px;
            cursor: pointer;
         }
         #confirm .message {
            text-align: left;
         }
      </style>
   </head>
   <body>
      <div id="confirm">
         <div class="message"></div>
         <img src="https://upload.wikimedia.org/wikipedia/en/thumb/e
             /ec/Soccer_ball.svg/120px-Soccer_ball.svg.png" width="150" height="110"/>
         <button class="yes">Like!</button>
         <button class="no">No, I Like Cricket!</button>
      </div>
      <button onclick='functionConfirm("Do you like Football?", function yes() {
         alert("Yes")
      }, function no() {
         alert("no")
      });'>submit</button>
   </body>
</html>