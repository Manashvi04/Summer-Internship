<!-- #include<iostream>
using namespace std;
int main(){
    int n;
    cout<<"Enter n:";
    cin>>n;
    for(int i=0;i<n;i++)
    {
        for(int j=0;j<=n-i-1;j++)
        {
            cout<<"* ";
        }
        cout<<endl;
    }
} -->

<?php
// Prompt the user for input in the terminal
echo "Enter the number of rows: ";
$rows = (int)readline();
echo "\nGenerating Pattern:\n\n";

// Outer loop for rows
for ($i = 1; $i <= $rows; $i++) {
    // Inner loop for columns
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    // Newline character for command-line output
    echo "\n"; 
}
?>

