<?php

/**
 * 1. ROUND()
 */

echo round(3.4);         // 3
echo round(3.5);         // 4
echo round(3.6);         // 4
echo round(3.6, 0);      // 4
echo round(1.95583, 2);  // 1.96
echo round(1241757, -3); // 1242000
echo round(5.045, 2);    // 5.05
echo round(5.055, 2);    // 5.06
echo round(9.5, 0, PHP_ROUND_HALF_UP);   // 10
echo round(9.5, 0, PHP_ROUND_HALF_DOWN); // 9
echo round(9.5, 0, PHP_ROUND_HALF_EVEN); // 10
echo round(9.5, 0, PHP_ROUND_HALF_ODD);  // 9
echo round(8.5, 0, PHP_ROUND_HALF_UP);   // 9
echo round(8.5, 0, PHP_ROUND_HALF_DOWN); // 8
echo round(8.5, 0, PHP_ROUND_HALF_EVEN); // 8
echo round(8.5, 0, PHP_ROUND_HALF_ODD);  // 9    

/* Using PHP_ROUND_HALF_UP with 1 decimal digit precision */
echo round( 1.55, 1, PHP_ROUND_HALF_UP);   //  1.6
echo round( 1.54, 1, PHP_ROUND_HALF_UP);   //  1.5
echo round(-1.55, 1, PHP_ROUND_HALF_UP);   // -1.6
echo round(-1.54, 1, PHP_ROUND_HALF_UP);   // -1.5

/* Using PHP_ROUND_HALF_DOWN with 1 decimal digit precision */
echo round( 1.55, 1, PHP_ROUND_HALF_DOWN); //  1.5
echo round( 1.54, 1, PHP_ROUND_HALF_DOWN); //  1.5
echo round(-1.55, 1, PHP_ROUND_HALF_DOWN); // -1.5
echo round(-1.54, 1, PHP_ROUND_HALF_DOWN); // -1.5

/* Using PHP_ROUND_HALF_EVEN with 1 decimal digit precision */
echo round( 1.55, 1, PHP_ROUND_HALF_EVEN); //  1.6
echo round( 1.54, 1, PHP_ROUND_HALF_EVEN); //  1.5
echo round(-1.55, 1, PHP_ROUND_HALF_EVEN); // -1.6
echo round(-1.54, 1, PHP_ROUND_HALF_EVEN); // -1.5

/* Using PHP_ROUND_HALF_ODD with 1 decimal digit precision */
echo round( 1.55, 1, PHP_ROUND_HALF_ODD);  //  1.5
echo round( 1.54, 1, PHP_ROUND_HALF_ODD);  //  1.5
echo round(-1.55, 1, PHP_ROUND_HALF_ODD);  // -1.5
echo round(-1.54, 1, PHP_ROUND_HALF_ODD);  // -1.5


/**
 * 2. FLOOR()
 */

echo floor(4.3);   // 4
echo floor(9.999); // 9
echo floor(-3.14); // -4


/**
 * 3. CEIL()
 */

echo ceil(4.3);    // 5
echo ceil(9.999);  // 10
echo ceil(-3.14);  // -3
