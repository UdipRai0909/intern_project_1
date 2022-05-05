<?php
$img = '../q1/img/udip_logo.png';
$css = '../q1/css/root1.css';
require_once '../q1/php/includes/_main_head.php';
?>

<div class="container" id="question3">
  <div class="my_nav_logo">
    <a href="../">
      <img src="<?= $img ?>" width="120" height="115" alt="My Nav Logo">
    </a>
    <h2>Task 3: Lets Solve</h2>
  </div>
  <p id="msg">Double click to copy</p>
  <button id="copy-btn2" class="btn btn-copy-me" onclick="copyCode2()">Copy code</button>
  <h1 class="btn-copy-me">Question</h1>
  <div class="row">
    <pre>
      <code>
<b>John is a programmer. He treasures his time very much. He lives on
the n floor of a building. Every morning he will go downstairs as quickly as
possible to begin his great work today. There are two ways he goes
downstairs: walking or taking the elevator. When John uses the elevator, he
will go through the following steps:</b>

1. Waiting the elevator from m floor to n floor;
   1a. Or take the stairs to m floor;
2. Waiting the elevator open the door and go in;
3. Waiting the elevator close the door;
4. Waiting the elevator down to 0 floor;
5. Waiting the elevator open the door and go out;
   (the time of go in/go out the elevator will be ignored)

<b>Given the following arguments:</b>
n: An integer. The floor of John(0-based).
m: An integer. The floor of the elevator(0-based).
   speeds: An array of integer. 
   It contains four integer [a,b,c,d]
a: The seconds required when the elevator rises or falls 1 floor
b: The seconds required when the elevator open the door
c: The seconds required when the elevator close the door
d: The seconds required when John walks to n-1 or n+1 floor

<b>Please help John to calculate the shortest time to go downstairs.</b>
      </code>
    </pre>
    </p>
  </div>
  <h1 class="btn-copy-me">Answer</h1>
  <div class="row">
    <pre>
      <code id="copy-code2">
const findShortestTime = (n, m, speed) => {
  let walk, walkAndElevator, elevator;
  let mixedTime = [walk, walkAndElevator, elevator];

  if (n === 0) {
    console.log("Shortest time : 0 seconds \n ==> Already on Ground Floor");
  } else {
    // Walking on foot only
    mixedTime[0] = n * speed[3];

    //Walking on foot + Taking the elevator
    let timeToReachElevatorFloorOnFoot = Math.abs(m - n) * speed[3];

    let timeToOpenAndCloseElevator = 2 * speed[1] + speed[2];

    let timeSpentInsideElevatorFromM = m * speed[0];

    mixedTime[1] =
      timeToReachElevatorFloorOnFoot +
      timeToOpenAndCloseElevator +
      timeSpentInsideElevatorFromM;

    //Taking the Elevator only
    let timeForElevatorToReachMyFloor = Math.abs(m - n) * speed[0];

    let timeSpentInsideElevatorFromN = n * speed[0];

    mixedTime[2] =
      timeForElevatorToReachMyFloor +
      timeToOpenAndCloseElevator +
      timeSpentInsideElevatorFromN;

    // Calculate the shortest time
    if (mixedTime[0] < mixedTime[1] && mixedTime[0] < mixedTime[2]) {
      console.log(`Shortest time : ${mixedTime[0]} \n ==> Through walking only.`);
    } else if (mixedTime[1] < mixedTime[0] && mixedTime[1] < mixedTime[2]) {
      console.log(
        `Shortest time : ${mixedTime[1]} \n ==> Through walking and taking the elevator both.`
      );
    } else {
      console.log(
        `Shortest time : ${mixedTime[2]} \n ==> Through taking the elevator only.`
      );
    }
  }
};

// Testing some possible outcomes / outputs
console.log(`===========================================`);
console.log(`Testing the results in examples provided ::`);
console.log(`===========================================\n`);

// For n = 4, m = 5 and speeds = [1,2,3,10], the output should be 12.
// John go downstairs by using the elevator:
// 1 + 2 + 3 + 4 + 2 = 12
console.log(`When n = 4, m = 5, and speeds = [1,2,3,10]`);
findShortestTime(4, 5, [1,2,3,10]);

// For n = 0, m = 5 and speeds = [1,2,3,10], the output should be 0.
// John is already at 0 floor, so the output is 0.
console.log(`\nWhen n = 0, m = 5, and speeds = [1,2,3,10]`);
findShortestTime(0, 5, [1,2,3,10]);

// For n = 4, m = 3 and speeds = [2,3,4,5], the output should be 20.
// John go downstairs by walking:
// 5 x 4 = 20
console.log(`\nWhen n = 4, m = 3, and speeds = [2,3,4,5]`);
findShortestTime(4, 3, [2,3,4,5]);

// For n = 7, m = 6 and speeds = [3,1,1,4], the output should be 25.
// John walks down 1 floor and takes the elevator from there.
// 1×4 + 1 + 1 + 6×3 + 1 = 25
console.log(`\nWhen n = 7, m = 6, and speeds = [3,1,1,4]`);
findShortestTime(7, 6, [3,1,1,4]);

// Pure walk would have taken 7×4 = 28; pure elevator would have taken 1×3 +
// 1 + 1 + 7×3 + 1 = 27.
</code>
</pre>
  </div>
</div>

<?php require_once '../q1/php/includes/_main_foot.php'; ?>