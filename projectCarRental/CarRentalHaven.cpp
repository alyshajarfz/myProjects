// This program for user to book a car and for staff to check daily total,highest,lowest and average sales of the day
#include <iostream>
#include<iomanip>
#include <cstring>
#include <windows.h>
#include <unistd.h>
using namespace std;

// function to calculate highest sale of the day
int largestSale(int arr[], int n)
{
    int maxSale = arr[0]; 

    for (int i = 1; i < n; i++)
    {
        if (arr[i] > maxSale)
        {
            maxSale = arr[i];
        }
    }
    return maxSale;
}

// function to calculate lowest sale of the day 
int smallestSale(int arr[], int n)
{
    int minSale = arr[0];

    for (int i = 1; i < n; i++)
    {
        if (arr[i] < minSale)
        {
            minSale = arr[i];
        }
    }
    return minSale;
}

//function to display receipt 
void receipt ()
{
	string model;
	int total_rent ;
	char type;
	cout<< " RECEIPT"<<endl;
	cout<< "Car Model : "<< model <<endl;
	cout<< "Car Type  : "<< type <<endl;
	cout<< "Total rent: RM "<< total_rent;
	cout<<endl;
}  

int main()
{
	// variable declaration
	int arr[100], sum = 0, i= 0, total_all = 0;
	char exit ;
	do
	{
		// variables
		int   hour, day, dayswanted ,  hourswanted, count, total_rent = 0, average = 0, highestSale, lowestSale, highest = 0, lowest = 0 ;
		char type, user, hours_or_days;
		string  model, AZ, BZ, AV, MV, name ;
		
		cout<<"\nWelcome to Car Rental Haven Enterprise!\n";
	
		// get the name of user
		cout<< "\nPlease Enter your Full Name: ";
		cin>> name; // input from user
		cout<<endl;
		cout<< "Choose user type \nS - Staff \nC - Customer\nUser: "; // display for user to choose staff or customer
		cin>> user ; // input from user
		cout<<endl;
		
		if (user == 'C' || user == 'c')
		{
			do 
			{
				// display the menu to user choose car model and the price
				cout<< "Welcome to Car Rental Haven Enterprise!\n";
				cout<< "                                                   Car Type "<<endl;
				cout<< "Car Model                         Automatic                        Manual"<<endl;
				cout<< "                         Per Hour(RM) | Per Days (RM)   Per Hour(RM) | Per Days (RM)"<<endl;
				cout<< "MV - Myvi                       10       120                 5            110" <<endl;   
	 			cout<< "BZ - Bezza                      15       150                 10           125 "<<endl;                 
	 			cout<< "AV - Avanza                     25       180                 20           175 "<<endl;                    
	 			cout<< "AZ - Alza                       35       210                 25           185 "<<endl;
	 			cout << endl ;
	
				cout<< "Please enter Car Model (e.g. MV, BZ, AV, AZ): "; // get the car model
				cin >> model; // input from user
				cout<<endl ; 
			
				cout<< "Car type"<<endl;
				cout<< "A - Automatic "<<endl;
				cout<< "M - Manual "<<endl;
				cout<< "Please enter Car Type : "; // get car type
				cin>> type; // input from user 
				cout<<endl;
				
				// set price
				if (type =='A')
				{
					if (model == "MV")
					{
						hour = 10;
						day = 120;
					}
					else if (model == "AV")
					{
						hour = 25;
						day = 180; 
					}
					else if (model == "AZ")
					{
						hour = 35;
						day = 210;
					}
					else 
					{
				    	hour = 15;
				    	day = 150;
					}
				}
				if( type =='M')
				{
						if (model == "MV")
						{
							hour = 5;
							day = 110;
						}
						else if (model == "AV")
						{	
							hour = 20;
							day = 175; 
						}
						else if (model == "AZ")
						{
							hour = 25;
							day = 185;
						}
						else
						{
							hour = 10;
							day = 125;
						}		
				}
				
				// get rent for days or hours
				cout<<"Rent for Days or Hours? (D - Days | H - Hours) : ";
				cin>> hours_or_days;	 // input from user
		
				if (hours_or_days== 'H' || hours_or_days == 'h')
				{
					cout<< "How many hours ? : "; // get hours for rent
					cin>> hourswanted; // input from user
					total_rent = hour * hourswanted;  // calculate total rent for hour
				}
				 if (hours_or_days== 'D' || hours_or_days == 'd') 
				{
					cout<< "How many days? : "; // get days for rent
			  		cin >> dayswanted; // input from user
			 		total_rent = day * dayswanted;  // calculate total rent for day
				}
				
				// display the receipt
				cout<<endl;
				cout<<"RECEIPT"<<endl;
				cout<<"Name      : " << name << endl;
				cout<<"Car Model : "<< model <<endl;
				cout<<"Car Type  : "<< type <<endl;
				cout<<"Total rent: RM "<< total_rent;
				cout<<endl;
				
				// array to calculate the total sale
				arr[i] = total_rent; // arr 1 is total rent , arr 2 jf total rent cust second bcs i ++
				i++;
				
			  	total_all += total_rent; // first tot rent + 0 bcs M=0, , then if M=1 , tot rent will be tot rent in first array + any in array 2
				                          
				
				cout<<"\nPlease proceed to the payment\n"<<endl;
				sleep(1);
				cout<<endl;
				cout<<"------Thank you for booking with Car Rental Haven Enterprise------"<<endl;
				sleep(2);
				cout <<"\n";
				
				cout << "\nDo you want to Exit or Make Another Booking? (E - Exit | B - Booking): ";
        		cin >> exit;
        		cout <<"\n";
    		} 
				
			while (exit != 'E' && exit != 'e');
		}
		
		else if (user == 'S'|| user == 's')
		{
	 		
	 		int choice;
			do
			{
				// display menu for staff choose to calculate 
				cout<<"Hello Employee!\nChoose an action:\n";
				cout<<"1 - Total sales of the day\n";
				cout<<"2 - Highest sales of the day\n";
	 			cout<<"3 - Lowest sales of the day\n";
	 			cout<<"4 - Average sales of the day \n";
	 			cout<<"Enter choice: ";
	 			cin>>choice; // input from user
	 			
	 			if(choice == 1)
				{
					cout<<endl;
					cout<<"[Total sales for today]\n\n";
					cout<<"Calculating....\n";
					sleep(2);
					cout<<endl;
					cout<<"Total sales : "<<total_all<<endl; // display total sale of the day
					cout<<"------------------------------";
	 				sleep(1);
	 				cout<<endl;
				}
	 			
	 			if (choice == 2)
	 			{
	 				cout<<endl;
					cout<<"[Highest sale for the day]\n\n";
					cout<<"Calculating....\n";
					sleep(2);
					cout<<endl;
					
					highest = largestSale(arr, i); // call function to calculate highest sale of the day
					
					cout<<"Highest sales : "<< highest <<endl; // display highest sale of the day
					cout<<"-------------------------------";
	 				sleep(1);
	 				cout<<endl;
				}
				
				if (choice == 3)
	 			{
	 				cout<<endl;
					cout<<"[Lowest sale for the day]\n\n";
					cout<<"Calculating....\n";
					sleep(2);
					cout<<endl;
					
					lowest = smallestSale(arr, i); // call function calculate lowest sale of the day
					
					cout<<"Lowest sale : "<< lowest <<endl; // display the lowest sale of the day
					cout<<"-------------------------------";
	 				sleep(1);
	 				cout<<endl;
				}
				
				if (choice == 4)
				{
					cout<<endl;
					cout<<"[Average sale for the day]\n\n";
					cout<<"Calculating....\n";
					sleep(2);
					cout<<endl;
					
					// looping to calculate sum
	    			for (int j = 0; j < i; j++)
	   				{
	    			    sum += arr[j];
	  			  	}
	
	   				average = sum / i; // calculate average sale of the day
	   					
					cout<<"Average sales : "<< average <<endl; // display average sale of the day
					cout<<"-------------------------------";
	 				sleep(1);
	 				cout<<endl;
				}
				
				cout << "\nDo you want to Exit or Continue? (E - Exit | C - Continue): ";
                cin >> exit;
                cout <<"\n";
            } while (exit != 'E' && exit != 'e');
        }

        cout << "\nDo you want to return to Main Menu? (Y - Yes | N - No Exit): ";
        cin >> exit;
        cout <<"\n";
        
    } while (exit == 'Y' || exit == 'y');

    cout << "\nYou have reached the end of the program.\n";
    return 0;
}


