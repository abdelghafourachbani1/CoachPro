<?php
    require_once '../controllers/profilecontroller.php'; 
?>

<form method="POST" action="../controllers/editprofilecontroller.php" class="space-y-6">

    <div>
        <label for="description">Biography</label>
        <textarea id="description" name="description" required rows="5"><?= htmlspecialchars($profile['description']) ?></textarea>
    </div>

    <div>
        <label for="experience_years">Years of Experience</label>
        <input type="number" id="experience_years" name="experience_years" required min="0" max="50" value="<?= $profile['experience_years'] ?>">
    </div>

    <div>
        <label for="certification">Certifications</label>
        <input type="text" id="certification" name="certification" required value="<?= htmlspecialchars($profile['certifications']) ?>">
    </div>

    <div>
        <label for="photo_url">Profile Photo URL</label>
        <input type="url" id="photo_url" name="photo_url" required value="<?= htmlspecialchars($profile['photo']) ?>">
    </div>

    <button type="submit">Update Profile</button>
</form>