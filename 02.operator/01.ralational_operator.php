<?php

// Ralational and Comparision Operator
/**
 * PHP has common comparision operator which reaturn boolean
 * value. Here all php Ralational Operator : 
 * ===, ==, !=, !==, >, <, >=, <=,  
 * 
 * special : 
 * <> // not equal ( check value and type like !== )
 * <=> // spaceship operator ( return 0 when both operand equal )
 *  <=> // ( return 1 when first operand is big )
 *  <=> // ( return -1 when first operand is small )
 * 
 */

echo ">>>> Check Spcial Ralational Operator in PHP <<<<\n";
echo "var_dump(10 <> 15) ", var_dump(10 <> 15);
echo "var_dump(10 <=> 13) ", var_dump(10 <=> 13);
echo "var_dump(10 <=> 10) ", var_dump(10 <=> 10);
echo "var_dump(8 <=> 13) ", var_dump(8 <=> 13);

?>