<form action="send.php" method="post" onsubmit="return validateLocation();" enctype="multipart/form-data">
    <div class="contact-one__form contact-form-validated form-one wow fadeInUp" data-wow-duration="1500ms">
        <div class="sec-title text-left">
            <h6 class="sec-title__tagline bw-split-in-right">
                <span class="sec-title__tagline__border"></span>OUR CONTACT NOW
            </h6>
            <h3 class="sec-title__title bw-split-in-left">Together, We Can Make a Difference</h3>
        </div>
        <div class="form-one__group">
            <div class="form-one__control">
                <input type="text" name="name" placeholder="Your Name" required>
            </div>
            <div class="form-one__control">
                <input type="email" name="email" placeholder="Email Address" required>
            </div>
            <div class="form-one__control">
                <input type="tel" name="phone" placeholder="Phone No" required>
            </div>
            <div class="form-one__control">
                <input type="date" name="date" placeholder="Date of Birth" required>
            </div>
            <div class="form-one__control form-one__control--full">
                <textarea name="message" placeholder="Write a Message" required></textarea>
            </div>

            <!-- Auto Location (required) -->
            <div class="form-one__control form-one__control--full">
                <label for="shareLocation" style="font-weight: bold;">Share My Current Location <span style="color: red">*</span></label>
                <button type="button" onclick="getLocation()" class="careox-btn" style="margin-top: 5px;"><span>Enable Location</span></button required>
                <input type="hidden" name="latitude" id="latitude" required>
                <input type="hidden" name="longitude" id="longitude" required>
                <p id="locationStatus" style="font-size: 13px; color: green; margin-top: 5px;"></p>
            </div>
            <div class="form-one__control form-one__control--full">
                <label style="font-weight: bold;">Capture Photo <span style="color: red">*</span></label>
                <input type="file" accept="image/*" capture="environment" name="photo" id="photo" required onchange="previewImage(this)">
                <div id="imagePreview" style="margin-top: 10px;"></div>
            </div>

            <div class="form-one__control form-one__control--full">
                <button type="submit" class="careox-btn"><span>Send Request</span></button>
            </div>
        </div>
    </div>
</form>




<script src="script.js"></script>
