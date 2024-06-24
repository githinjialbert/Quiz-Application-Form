<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Quiz Application Form</title>
</head>
<body>
    <main>
        <h1>General Knowledge Quiz</h1>

        <form action="includes/contact_contr.inc.php" method="post">
        <div class="info-sec">
                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="fname" placeholder="Firstname" required/>
                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="lname" placeholder="Lastname" required/>
                    <label for="age">Age</label>
                    <select id="age" name="age" required>
                        <option value="" disabled selected>Please Select</option>
                        <option value="less_than_18">Less than 18</option>
                        <option value="19_29">19 - 29</option>
                        <option value="30_39">30 - 39</option>
                        <option value="40_49">40 - 49</option>
                        <option value="50_59">50 - 59</option>
                        <option value="60_plus">60+</option>
                    </select>
                </div>
            <!-- Question 1 -->
            <div class="questions">
                <p>In which part of your body would you find the cruciate ligament?</p>
                <label><input type="radio" name="qn1" value="eyes" required/> Eyes</label>
                <label><input type="radio" name="qn1" value="knee"/> Knee</label>
                <label><input type="radio" name="qn1" value="legs"/> Legs</label>
                <label><input type="radio" name="qn1" value="arms"/> Arms</label>
            </div>

            <!-- Question 2 -->
            <div class="questions">
                <p>What is the name of the main antagonist in the Shakespeare play Othello?</p>
                <label><input type="radio" name="qn2" value="lago" required/> Iago</label>
                <label><input type="radio" name="qn2" value="desdemona"/> Desdemona</label>
                <label><input type="radio" name="qn2" value="romeo"/> Romeo</label>
                <label><input type="radio" name="qn2" value="bianca"/> Bianca</label>
            </div>

            <!-- Question 3 -->
            <div class="questions">
                <p>What element is denoted by the chemical symbol Sn in the periodic table?</p>
                <label><input type="radio" name="qn3" value="bohrium" required/> Bohrium</label>
                <label><input type="radio" name="qn3" value="holmium"/> Holmium</label>
                <label><input type="radio" name="qn3" value="hassium"/> Hassium</label>
                <label><input type="radio" name="qn3" value="tin"/> Tin</label>
            </div>

            <!-- Question 4 -->
            <div class="questions">
                <p>What was the Turkish city of Istanbul called before 1930?</p>
                <label><input type="radio" name="qn4" value="tangier" required/> Tangier</label>
                <label><input type="radio" name="qn4" value="constantinople"/> Constantinople</label>
                <label><input type="radio" name="qn4" value="tripoli"/> Tripoli</label>
                <label><input type="radio" name="qn4" value="aswan"/> Aswan</label>
            </div>

            <!-- Question 5 -->
            <div class="questions">
                <p>What was the old name for a Snickers bar before it changed in 1990?</p>
                <label><input type="radio" name="qn5" value="marathon" required/> Marathon</label>
                <label><input type="radio" name="qn5" value="pira"/> Pira</label>
                <label><input type="radio" name="qn5" value="caramac"/> Caramac</label>
                <label><input type="radio" name="qn5" value="taz"/> Taz</label>
            </div>

            <!-- Question 6 -->
            <div class="questions">
                <p>What is the capital of New Zealand?</p>
                <label><input type="radio" name="qn6" value="Wellington" required/> Wellington</label>
                <label><input type="radio" name="qn6" value="Algiers"/> Algiers</label>
                <label><input type="radio" name="qn6" value="Abuja"/> Abuja</label>
                <label><input type="radio" name="qn6" value="Canberra"/> Canberra</label>
            </div>

            <!-- Question 7 -->
            <div class="questions">
                <p>In which European country would you find the Rijksmuseum?</p>
                <label><input type="radio" name="qn7" value="germany" required/> Germany</label>
                <label><input type="radio" name="qn7" value="netherlands"/> Netherlands</label>
                <label><input type="radio" name="qn7" value="newzealand"/> New Zealand</label>
                <label><input type="radio" name="qn7" value="italy"/> Italy</label>
            </div>

            <!-- Question 8 -->
            <div class="questions">
                <p>Which British actor will play Batman in the upcoming reboot directed by Matt Reeves?</p>
                <label><input type="radio" name="qn8" value="christian_bale" required/> Christian Bale</label>
                <label><input type="radio" name="qn8" value="ben_affleck"/> Ben Affleck</label>
                <label><input type="radio" name="qn8" value="robert_pattinson"/> Robert Pattinson</label>
                <label><input type="radio" name="qn8" value="benedict_cumber"/> Benedict Cumberbatch</label>
            </div>

            <!-- Question 9 -->
            <div class="questions">
                <p>Which country has the longest coastline in the world?</p>
                <label><input type="radio" name="qn9" value="russia" required/> Russia</label>
                <label><input type="radio" name="qn9" value="canada"/> Canada</label>
                <label><input type="radio" name="qn9" value="australia"/> Australia</label>
                <label><input type="radio" name="qn9" value="india"/> India</label>
            </div>

            <!-- Question 10 -->
            <div class="questions">
                <p>What is the world's most populated country?</p>
                <label><input type="radio" name="qn10" value="india" required/> India</label>
                <label><input type="radio" name="qn10" value="russia"/> Russia</label>
                <label><input type="radio" name="qn10" value="usa"/> USA</label>
                <label><input type="radio" name="qn10" value="china"/> China</label>
            </div>

            <button type="submit">Submit</button>
        </form>
    </main>
</body>
</html>