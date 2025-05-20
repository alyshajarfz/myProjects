#include <stdio.h>
#include <string.h>
#include <time.h>
#include <stdlib.h>

#define MAX_ORDERS 100 // Define the maximum number of orders that can be processed

// Function to clear the console screen
void clearScreen() {
#ifdef _WIN32
    system("cls"); // Clear screen for Windows
#else
    system("clear"); // Clear screen for Unix-based systems (Linux/Mac)
#endif
}

// Function to display the welcome message with current date and time
void displayWelcomeMessage() {
    time_t now = time(0); // Get the current time
    struct tm *localTime = localtime(&now); // Convert to local time format

    printf("*********************************************\n");
    printf("* Welcome to UniKiosk                       *\n");
    printf("*                                           *\n");
    printf("* Please select an option:                  *\n");
    printf("* 1. Start Order                            *\n");
    printf("* 2. View Menu                              *\n");
    printf("* 3. Exit                                   *\n");
    printf("*                                           *\n");
    printf("* Date: %02d-%02d-%d", localTime->tm_mday, localTime->tm_mon + 1, localTime->tm_year + 1900); // Display current date
    printf("                          *\n");
    printf("* Time: %02d:%02d:%02d", localTime->tm_hour, localTime->tm_min, localTime->tm_sec); // Display current time
    printf("                            *\n");
    printf("*                                           *\n");
    printf("*********************************************\n\n");
}

// Define structure for food items
struct FoodItem {
    char code[3]; // Item code (e.g., F1)
    char name[50]; // Name of the food item
    float price; // Price of the food item
};

// Define structure for drink items
struct DrinkItem {
    char code[3]; // Item code (e.g., D1)
    char name[50]; // Name of the drink item
    float price; // Price of the drink item
};

// Initialize food menu with predefined items
struct FoodItem foodMenu[] = {
    {"F1", "Nasi Ayam", 6.00},
    {"F2", "Nasi Lemak", 4.00},
    {"F3", "Spaghetti Aglio Olio", 8.00},
    {"F4", "Chicken Chop", 8.00},
    {"F5", "Spaghetti Seafood", 12.00},
};

// Initialize drink menu with predefined items
struct DrinkItem drinkMenu[] = {
    {"D1", "Mineral Water", 1.00},
    {"D2", "Hazelnut Latte (Iced)", 10.00},
    {"D3", "Hazelnut Latte (Hot)", 8.00},
    {"D4", "Chocolate (Iced)", 7.00},
    {"D5", "Chocolate (Hot)", 5.50},
    {"D6", "Ice Lemon Tea", 6.00},
    {"D7", "Sirap (Iced)", 4.00},
    {"D8", "Sirap (Hot)", 3.00},
};

// Structure to store ordered items
struct OrderItem {
    char name[50]; // Name of the ordered item
    int quantity; // Quantity of the ordered item
    float price; // Total price of the ordered item
};

// Function to display the food and drink menus
void displayMenu() {
    printf("\n** Food Menu **\n");
    for (int i = 0; i < sizeof(foodMenu) / sizeof(foodMenu[0]); i++) {
        printf("%-3s - %-30s: RM%.2f\n", foodMenu[i].code, foodMenu[i].name, foodMenu[i].price); // Display each food item
    }

    printf("\n** Drink Menu **\n");
    for (int i = 0; i < sizeof(drinkMenu) / sizeof(drinkMenu[0]); i++) {
        printf("%-3s - %-30s: RM%.2f\n", drinkMenu[i].code, drinkMenu[i].name, drinkMenu[i].price); // Display each drink item
    }

    printf("\nPress any key to continue...");
    getchar(); // Wait for user input before proceeding
    clearScreen(); // Clear the screen
}

// Function to get a positive integer input from the user
int getPositiveInteger() {
    int value;
    while (1) {
        printf("(Enter a positive integer) - ");
        if (scanf("%d", &value) == 1 && value > 0) { // Validate input to ensure it's a positive integer
            getchar(); // Clear newline character
            return value; // Return valid input
        }
        printf("Invalid input. Please try again.\n");
        while (getchar() != '\n'); // Clear invalid input
    }
}

// Function to calculate the price with optional voucher discount
float calculatePrice(float subtotal, const char* voucherCode) {
    float discount = 0.0;

    if (strcmp(voucherCode, "JASIN") == 0) {
        discount = subtotal * 0.3; // 30% discount
    }

    return subtotal - discount;
}

void processOrder(const char* itemCode, float* total, struct OrderItem* orders, int* orderCount) {
    int quantity;

    if (itemCode[0] == 'F') { // Check if it's a food item
        for (int j = 0; j < sizeof(foodMenu) / sizeof(foodMenu[0]); j++) {
            if (strcmp(itemCode, foodMenu[j].code) == 0) {
                printf("Enter quantity for %s: ", foodMenu[j].name);
                quantity = getPositiveInteger();
                *total += foodMenu[j].price * quantity;

                strcpy(orders[*orderCount].name, foodMenu[j].name);
                orders[*orderCount].quantity = quantity;
                orders[*orderCount].price = foodMenu[j].price * quantity;
                (*orderCount)++;

                printf("Added: %d x %s (RM%.2f)\n", quantity, foodMenu[j].name, foodMenu[j].price * quantity);
                return; // Exit after processing the item
            }
        }
    } else if (itemCode[0] == 'D') { // Check if it's a drink item
        for (int j = 0; j < sizeof(drinkMenu) / sizeof(drinkMenu[0]); j++) {
            if (strcmp(itemCode, drinkMenu[j].code) == 0) {
                printf("Enter quantity for %s: ", drinkMenu[j].name);
                quantity = getPositiveInteger();
                *total += drinkMenu[j].price * quantity;

                strcpy(orders[*orderCount].name, drinkMenu[j].name);
                orders[*orderCount].quantity = quantity;
                orders[*orderCount].price = drinkMenu[j].price * quantity;
                (*orderCount)++;

                printf("Added: %d x %s (RM%.2f)\n", quantity, drinkMenu[j].name, drinkMenu[j].price * quantity);
                return; // Exit after processing the item
            }
        }
    }

    // If the item code is not found
    printf("Invalid item code. No such item in the menu.\n");
}


// Function to start the order process
void startOrder() {
    char customerName[50], contactNum[20], voucherCode[10];
    int tableNum, numItems, quantity;
    char itemCode[3];
    float total = 0.0, voucherDiscount = 0.0, finalTotal = 0.0;
    struct OrderItem orders[MAX_ORDERS]; // Array to store ordered items
    int orderCount = 0; // Counter for number of ordered items
    static int orderIDCounter = 1; // Counter for generating unique order IDs

    // Gather customer details
    printf("Enter Customer Name: ");
    scanf("%s", customerName);
    printf("Enter Contact Number: ");
    scanf("%s", contactNum);
    printf("Enter Table Number: ");
    tableNum = getPositiveInteger();

    printf("\nWelcome, %s!\n\n", customerName);

    printf("How many items would you like to order? (e.g., 1, 2): ");
    numItems = getPositiveInteger();

    // Display food and drink menus again
    printf("\n** Food Menu **\n");
    for (int i = 0; i < sizeof(foodMenu) / sizeof(foodMenu[0]); i++) {
        printf("%-3s - %-30s: RM%.2f\n", foodMenu[i].code, foodMenu[i].name, foodMenu[i].price);
    }

    printf("\n** Drink Menu **\n");
    for (int i = 0; i < sizeof(drinkMenu) / sizeof(drinkMenu[0]); i++) {
        printf("%-3s - %-30s: RM%.2f\n", drinkMenu[i].code, drinkMenu[i].name, drinkMenu[i].price);
    }

    // Loop to take item orders
    for (int i = 0; i < numItems; i++) {
        printf("\nEnter item code (e.g., F1, D3): ");
        scanf("%s", itemCode);

        // Validate item code input
        while (strlen(itemCode) != 2 || (itemCode[0] != 'F' && itemCode[0] != 'D')) {
            printf("Invalid item code. Please enter a valid code (e.g., F1, D3) : ");
            scanf("%s", itemCode);
        }

        // Add food item to the order
        processOrder(itemCode, &total, orders, &orderCount);
    }

    // Apply voucher code if available
    printf("\nEnter voucher code (if any): ");
    scanf("%s", voucherCode);
    
	
	if (strcmp(voucherCode, "JASIN") == 0) {
		// Calculate the final total using the calculatePrice function
	    finalTotal = calculatePrice(total, voucherCode);
	    printf("Your voucher has been successfully applied!\n");
	} else if (strlen(voucherCode) > 0) {
    	printf("Invalid voucher code. No discount applied.\n");
	}		
	
    // Print receipt
    printf("\n\nRECEIPT\n\n");
    printf("*********************************************\n");
    printf("* UniKiosk - Order Receipt                  *\n");
    printf("*********************************************\n");

    char orderID[10];
    sprintf(orderID, "ORD%03d", orderIDCounter++); // Generate unique order ID
    printf("* Order ID: %-30s  *\n", orderID);

    printf("* Date: ");
    time_t now = time(0);
    struct tm *localTime = localtime(&now);
    printf("%02d-%02d-%d %02d:%02d:%02d                 *\n",
           localTime->tm_mday, localTime->tm_mon + 1, localTime->tm_year + 1900,
           localTime->tm_hour, localTime->tm_min, localTime->tm_sec);

    printf("* Table: %-34d *\n", tableNum);
    printf("* Customer: %-31s *\n", customerName);
    printf("* Contact: %-32s *\n", contactNum);
    printf("*********************************************\n");

    printf("| Item                   | Quantity |  Price |\n");
    printf("|------------------------|----------|--------|\n");
    for (int i = 0; i < orderCount; i++) {
        printf("| %-22s | %4d     |RM%6.2f|\n", orders[i].name, orders[i].quantity, orders[i].price);
    }
    printf("|------------------------|----------|--------|\n");

    printf("| Subtotal:                          RM%6.2f|\n", total);
    if (strcmp(voucherCode, "JASIN") == 0) {
        printf("| Voucher (JASIN):                   RM%6.2f|\n", total-finalTotal);
        printf("| Total:                             RM%6.2f|\n", finalTotal);
    }
    else{
    	printf("| Total:                             RM%6.2f|\n", total);
	}
    printf("|--------------------------------------------|\n");
    printf("* Thank you for your order!                  *\n");
    printf("*********************************************\n");

    // Wait for user input before clearing the screen
    printf("\nPress any key to continue...");
    getchar(); // Consume any remaining newline character
    getchar(); // Wait for user to press a key

    // Clear the screen
    clearScreen();
}

// Main function to run the program
int main() {
    char choice; // Variable to store user's menu choice

    while (1) { 
        displayWelcomeMessage(); // Display welcome message and menu options

        printf("Enter your choice: ");
        scanf(" %c", &choice); // Read user's menu choice
        getchar(); // Clear newline character

        if (choice == '1') { // Start order process
            startOrder();
        } else if (choice == '2') { // View menu
            displayMenu();
        } else if (choice == '3') { // Exit the program
            printf("\nThank you for using UniKiosk!\n");
            return 0; 
        } else { // Handle invalid choices
            printf("\nInvalid choice. Please try again.\n");
        }
    }

    return 0;
}

