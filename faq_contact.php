<!doctype html>
<html lang="en">
<head>
    <?php include "public/parts/head.php"; ?>
</head>
<body>

<?php include "components/header.php"; ?>

<main>
    <div id="contact" class="wrapper">
        <div class="faq-content-titel">
            <a href="faq-home.php"><p><i class="fas fa-arrow-left"></i> terug</p></a>
            <h2>Contactformulier</h2>
        </div>

        <div class="faq--contact">
            <div class="faq--content">
                <div class="faq--form">
                    <p>
                        Gemiddeld wordt er binnen 5 dagen contact met je opgenomen.
                    </p>
                    <form action="faq_contact.php" method="post">
                        <div class="form--group">
                            <label>Taal:</label>
                            <select name="lang">
                                <option value="AF">Afrikanns</option>
                                <option value="SQ">Albanian</option>
                                <option value="AR">Arabic</option>
                                <option value="HY">Armenian</option>
                                <option value="EU">Basque</option>
                                <option value="BN">Bengali</option>
                                <option value="BG">Bulgarian</option>
                                <option value="CA">Catalan</option>
                                <option value="KM">Cambodian</option>
                                <option value="ZH">Chinese (Mandarin)</option>
                                <option value="HR">Croation</option>
                                <option value="CS">Czech</option>
                                <option value="DA">Danish</option>
                                <option value="NL">Dutch</option>
                                <option value="EN">English</option>
                                <option value="ET">Estonian</option>
                                <option value="FJ">Fiji</option>
                                <option value="FI">Finnish</option>
                                <option value="FR">French</option>
                                <option value="KA">Georgian</option>
                                <option value="DE">German</option>
                                <option value="EL">Greek</option>
                                <option value="GU">Gujarati</option>
                                <option value="HE">Hebrew</option>
                                <option value="HI">Hindi</option>
                                <option value="HU">Hungarian</option>
                                <option value="IS">Icelandic</option>
                                <option value="ID">Indonesian</option>
                                <option value="GA">Irish</option>
                                <option value="IT">Italian</option>
                                <option value="JA">Japanese</option>
                                <option value="JW">Javanese</option>
                                <option value="KO">Korean</option>
                                <option value="LA">Latin</option>
                                <option value="LV">Latvian</option>
                                <option value="LT">Lithuanian</option>
                                <option value="MK">Macedonian</option>
                                <option value="MS">Malay</option>
                                <option value="ML">Malayalam</option>
                                <option value="MT">Maltese</option>
                                <option value="MI">Maori</option>
                                <option value="MR">Marathi</option>
                                <option value="MN">Mongolian</option>
                                <option value="NE">Nepali</option>
                                <option value="NO">Norwegian</option>
                                <option value="FA">Persian</option>
                                <option value="PL">Polish</option>
                                <option value="PT">Portuguese</option>
                                <option value="PA">Punjabi</option>
                                <option value="QU">Quechua</option>
                                <option value="RO">Romanian</option>
                                <option value="RU">Russian</option>
                                <option value="SM">Samoan</option>
                                <option value="SR">Serbian</option>
                                <option value="SK">Slovak</option>
                                <option value="SL">Slovenian</option>
                                <option value="ES">Spanish</option>
                                <option value="SW">Swahili</option>
                                <option value="SV">Swedish </option>
                                <option value="TA">Tamil</option>
                                <option value="TT">Tatar</option>
                                <option value="TE">Telugu</option>
                                <option value="TH">Thai</option>
                                <option value="BO">Tibetan</option>
                                <option value="TO">Tonga</option>
                                <option value="TR">Turkish</option>
                                <option value="UK">Ukranian</option>
                                <option value="UR">Urdu</option>
                                <option value="UZ">Uzbek</option>
                                <option value="VI">Vietnamese</option>
                                <option value="CY">Welsh</option>
                                <option value="XH">Xhosa</option>
                            </select>
                        </div>
                        <div class="form--group">
                            <label> E-mail:</label>
                            <input type="email" name="email" placeholder="Bijvoorbeeld: xjoanne@gmail.com">
                        </div>
                        <div class="form--group">
                            <label>Wat is je vraag?</label>
                            <textarea>



                            </textarea>
                        </div>
                        <div class="form--group">
                            <button type="submit" class="btn-primary">Versturen</button>
                        </div>
                    </form>
                </div>
                <div class="faq--information">
                    <h3> Contactgegevens</h3>
                    <p>
                        Het kantoor van het Voedselbank Serviceteam is geopend en bereikbaar via telefoon en e-mail.
                    </p>
                    <p>
                        Bereikbaar van maandag tot vrijdag van 10:00 uur tot 17:00 uur.
                    </p>
                    <p>
                        <i class="fas fa-phone"></i> 040 221 99 85<br/>
                        <a href="mailto:info@voedselbank.nl"> <i class="fas fa-envelope"></i> info@voedselbank.nl</a>
                    </p>
                    <hr>
                    <p>
                        <h3> <i class="fas fa-home"></i> Adres</h3>
                        Meidoornkade 31<br/>
                        3992 AG Houten<br/>
                        KVK: 57977321<br/>
                        RSIN: 8521818440
                    </p>
                    <hr>
                    <p>
                        Wij stellen op prijs dat bezoekers van te voren een afspraak maken.
                    </p>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include "components/footer.php"; ?>

</body>
</html>