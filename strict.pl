use strict;
my @age = (12,23,34);

print " @age\n";
my @days = ('Mon', 'Tue', 'Wed', 'Thu', 'Fri');
print "@days\n";

my @arr  = (1,2,3,"Hello");
print "@arr\n";

print "method 2\n";

my @days = qw/Mon Tue Wed Thu Fri/;
print "@days\n\n";

print "method 3\n";
my @names ;
$names[0]= "Sara";
$names[1]= "Akash";
$names[2]= "Raku";

print "@names\n";

print "Method 4 \n";

my @nums = (1..9);
my @letters = ('a'..'z');

print "@nums\n";
print "@letters\n";

print "Elements retrivial \n";
print "$age[2]\n";
print  "$days[3]\n";
print  "$arr[-2]";
print "@nums[1,4,2]\n";
print "@letters[1..4]";
print "$names[1]";


print "Find the size of the array\n";
print "method 1 :".scalar @ages."\n";



