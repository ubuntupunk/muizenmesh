<form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">

<header>
        <h1>Get FREE Updates</h1>
        <p>Join us for FREE to get email updates!</p>
    </header>

    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" placeholder="Enter your name" />
	<small><?php echo $errors['name'] ?? '' ?></small>
    </div>

    <div>
        <label for="name">Email:</label>
        <input type="email" name="email" id="email" placeholder="Enter your email" />
	<small><?php echo $errors['email'] ?? '' ?></small>    
   </div>

    <div>
        <button type="submit">Subscribe</button>
    </div>
</form>
