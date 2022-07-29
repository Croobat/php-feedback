<?php include 'inc/header.php' ?>

<?php
  $feedback = [
  [
    'id' => '1',
    'name' => 'Tania',
    'email' => 'tania@mail.com',
    'body' => 'Me gusta tu contenido.'
  ],
  [
    'id' => '2',
    'name' => 'Samantha',
    'email' => 'sam@mail.com',
    'body' => 'No me gusta tu contenido.'
  ],
  [
    'id' => '3',
    'name' => 'Roberto Alemán',
    'email' => 'rob@mail.com',
    'body' => 'Está bien.'
  ],
];
?>

<?php
  $sql = 'SELECT * FROM feedback';
  $result = mysqli_query($conn, $sql);
  $feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

    <h2>Past feedback</h2>

    <?php if(empty($feedback)): ?>
      <p class="lead mt3">There is no feedback</p>
    <?php endif; ?>

    <?php foreach($feedback as $item): ?>
      <div class="card my-3 w-75">
       <div class="card-body text-center">
         <!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta molestias animi earum eos dolorem repellat a quibusdam, aperiam vero repellendus voluptatibus natus deserunt sed doloribus inventore, totam labore maxime perferendis! -->
        <?php echo $item['body']; ?>
        <div class="text-secondary mt-2">
          By <?php echo $item['name']; ?> on <?php echo $item ['date']; ?>
        </div>
       </div>
     </div>
    <?php endforeach; ?>

   <!-- <div class="card my-3"> -->
   <!--   <div class="card-body"> -->
   <!--     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta molestias animi earum eos dolorem repellat a quibusdam, aperiam vero repellendus voluptatibus natus deserunt sed doloribus inventore, totam labore maxime perferendis! -->
   <!--   </div> -->
   <!-- </div> -->

   <!-- <div class="card my-3"> -->
   <!--   <div class="card-body"> -->
   <!--     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta molestias animi earum eos dolorem repellat a quibusdam, aperiam vero repellendus voluptatibus natus deserunt sed doloribus inventore, totam labore maxime perferendis! -->
   <!--   </div> -->
   <!-- </div> -->

<?php include 'inc/footer.php' ?>

