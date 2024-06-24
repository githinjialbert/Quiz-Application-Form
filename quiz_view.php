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
            <div class="questions">
                <p>In which part of your body would you find the cruciate ligament?</p>
                <input type="radio" id="qn1a" name="qn1" value="eyes" required/>
                <label for="qn1a">Eyes</label>
                <input type="radio" id="qn1b" name="qn1" value="knee"/>
                <label for="qn1b">Knee</label>
                <input type="radio" id="qn1c" name="qn1" value="legs"/>
                <label for="qn1c">Legs</label>
                <input type="radio" id="qn1d" name="qn1" value="arms"/>
                <label for="qn1d">Arms</label>
            </div>
            <div class="questions">
                <p>What is the name of the main antagonist in the Shakespeare play Othello?</p>
                <input type="radio" id="qn2a" name="qn2" value="lago" required/>
                <label for="qn2a">lago</label>
                <input type="radio" id="qn2b" name="qn2" value="desdemona"/>
                <label for="qn2b">Desdemona</label>
                <input type="radio" id="qn2c" name="qn2" value="romeo"/>
                <label for="qn2c">Romeo</label>
                <input type="radio" id="qn2d" name="qn2" value="bianca"/>
                <label for="qn2d">Bianca</label>
            </div>
            <div class="questions">
                <p>What element is denoted by the chemical symbol Sn in the periodic table?</p>
                <input type="radio" id="qn3a" name="qn3" value="bohrium" required/>
                <label for="qn3a">Bohrium</label>
                <input type="radio" id="qn3b" name="qn3" value="holmium"/>
                <label for="qn3b">Holmium</label>
                <input type="radio" id="qn3c" name="qn3" value="hassium"/>
                <label for="qn3c">Hassium</label>
                <input type="radio" id="qn3d" name="qn3" value="tin"/>
                <label for="qn3d">Tin</label>
            </div>
            <div class="questions">
                <p>What was the Turkish city of Istanbul called before 1930?</p>
                <input type="radio" id="qn4a" name="qn4" value="tangier" required/>
                <label for="qn4a">Tangier</label>
                <input type="radio" id="qn4b" name="qn4" value="constantinople"/>
                <label for="qn4b">Constantinople</label>
                <input type="radio" id="qn4c" name="qn4" value="tripoli"/>
                <label for="qn4c">Tripoli</label>
                <input type="radio" id="qn4d" name="qn4" value="aswan"/>
                <label for="qn4d">Aswan</label>
            </div>
            <div class="questions">
                <p>What was the old name for a Snickers bar before it changed in 1990?</p>
                <input type="radio" id="qn5a" name="qn5" value="marathon" required/>
                <label for="qn5a">Marathon</label>
                <input type="radio" id="qn5b" name="qn5" value="pira"/>
                <label for="qn5b">Pira</label>
                <input type="radio" id="qn5c" name="qn5" value="caramac"/>
                <label for="qn5c">Caramac</label>
                <input type="radio" id="qn5d" name="qn5" value="taz"/>
                <label for="qn5d">Taz</label>
            </div>
            <div class="questions">
                <p>What is the capital of New Zealand?</p>
                <input type="radio" id="qn6a" name="qn6" value="Wellington" required/>
                <label for="qn6a">Eyes</label>
                <input type="radio" id="qn6b" name="qn6" value="Algiers"/>
                <label for="qn6b">Knee</label>
                <input type="radio" id="qn6c" name="qn6" value="Abuja"/>
                <label for="qn6c">Legs</label>
                <input type="radio" id="qn6d" name="qn6" value="Canberra"/>
                <label for="qn6d">Arms</label>
            </div>
            <div class="questions">
                <p>In which European country would you find the Rijksmuseum?</p>
                <input type="radio" id="qn7a" name="qn7" value="germany" required/>
                <label for="qn7a">Germany</label>
                <input type="radio" id="qn7b" name="qn7" value="netherlands"/>
                <label for="qn7b">Netherlands</label>
                <input type="radio" id="qn7c" name="qn7" value="newzealand"/>
                <label for="qn7c">New Zealand</label>
                <input type="radio" id="qn7d" name="qn7" value="italy"/>
                <label for="qn7d">Italy</label>
            </div>
            <div class="questions">
                <p>Which British actor will play Batman in the upcoming reboot directed by Matt Reeves?</p>
                <input type="radio" id="qn8a" name="qn8" value="christian_bale" required/>
                <label for="qn8a">Christian Bale</label>
                <input type="radio" id="qn8b" name="qn8" value="ben_affleck"/>
                <label for="qn8b">Ben Affleck</label>
                <input type="radio" id="qn8c" name="qn8" value="robert_pattinson"/>
                <label for="qn8c">Robert Pattinson</label>
                <input type="radio" id="qn8d" name="qn8" value="benedict_cumber"/>
                <label for="qn8d">Benedict Cumber</label>
            </div>
            <div class="questions">
                <p>Which country has the longest coastline in the world?</p>
                <input type="radio" id="qn9a" name="qn9" value="russia" required/>
                <label for="qn9a">Russia</label>
                <input type="radio" id="qn9b" name="qn9" value="canada"/>
                <label for="qn9b">Canada</label>
                <input type="radio" id="qn9c" name="qn9" value="australia"/>
                <label for="qn9c">Australia</label>
                <input type="radio" id="qn9d" name="qn9" value="india"/>
                <label for="qn9d">India</label>
            </div>
            <div class="questions">
                <p>What is the world's most populated country?</p>
                <input type="radio" id="qn10a" name="qn10" value="india" required/>
                <label for="qn10a">India</label>
                <input type="radio" id="qn10b" name="qn10" value="russia"/>
                <label for="qn10b">Russia</label>
                <input type="radio" id="qn10c" name="qn10" value="usa"/>
                <label for="qn10c">USA</label>
                <input type="radio" id="qn10d" name="qn10" value="china"/>
                <label for="qn10d">China</label>
            </div>
            <button type="submit">Submit</button>
        </form>
    </main>
</body>
</html>
