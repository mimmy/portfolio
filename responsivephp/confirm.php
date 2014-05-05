<?php include 'header.php'; ?>
    <div id="content">
<div class="contactcontainer"><form id="orderform" action="order_handling.php" method="post">
<input id="namename" type="text" name="name" placeholder="Name" required autofocus>
<input id="lastname" type="text" name="lastname" placeholder="Last Name" required><br>
<input id="phonephone" type="email" name="email" placeholder="E-mail" required>
<input type="text" name="phone" placeholder="Phone number" required><br>
<input id="address" type="text" name="address" placeholder="Address" required>
<textarea id="details" cols="50" rows="7" name="message" placeholder="Tell us about it" requred>
<?php
        foreach($_POST as $key => $value) {
            if ($value>1) {
                echo "$key - $value pcs\xA";
            }
            elseif ($value==1) {
                echo "$key - $value pc\xA";
            }
        }
      ?>
  </textarea>
<input id="button" type="submit" value="Submit" form="orderform">
</div>
</form>       
</div>
       <footer id="footerbcg">
     <div id="footer">
        <div id="one"><a href="#"><img src="imgs/roflag.png" alt="romanian flag"/></a>
        </div>
       <div id="two"><h3>Contact</h3>
        <p>Adress: Trangstraede 1, Randers C 8900<br>
        E-mail: bestilling@biabakery.dk <br>
        Phone: 22872047</p>
        </div>
        <div id="three">
            <a href="https://www.facebook.com/Bia.Bakery" target="_blank"><img src="imgs/fb.png" alt="facebook icon"/></a>
            <a href="https://www.pinterest.com" target="_blank"><img src="imgs/pin.png" alt="pinterest icon"/></a>
        </div>
    </div>
</footer>
        <script type="text/javascript">
            $("div#menubutton").click(function(){
                $("nav#dropdown").toggle();
            });
        </script>
</body>
</html>