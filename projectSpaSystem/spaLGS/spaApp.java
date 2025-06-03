import java.io.BufferedReader; // read data line by line by readLine()
import java.io.FileReader; // read a stream of characters from the files
import java.io.IOException; // handle the name of a file that doesn't exist
import java.io.PrintWriter; // to write any form of data in a file in Java using println
import java.io.BufferedWriter; // fast performance
import java.io.FileWriter; // write character-oriented data to a file
import java.util.StringTokenizer; // split strings into multiple tokens

public class spaApp {
    public static void main(String[] args) 
    {
        try {   
            // read from a file "LuxeGlowSpa.txt "
            BufferedReader sbR = new BufferedReader(new FileReader("C:/Users/Acer/Documents/LI-2025/PROJECT/projectSpaSystem/LuxeGlowSpa.txt"));
            
            // write to a file "printW.txt"
            PrintWriter spW = new PrintWriter(new BufferedWriter(new FileWriter("C:/Users/Acer/Documents/LI-2025/PROJECT/projectSpaSystem/printW.txt")));
            
            // variable 
            String name, phoneNum, member, packages, reserveType;
            
            // array to store reservation objects
            Reservation[] arrC = new Reservation[10];
            
            // index variable for the array
            int i = 0;
            double totalSales = 0.00;
            
            // variable to track highest sale
            Customer highestSaleCust = null;
            double maxSale = 0.00;
            
            // read the first line from the file
            String data = sbR.readLine();
    
            // loop to read data from the file and create reservation objects
            while (data != null && i < arrC.length) 
            {
                // tokenize the lineusing commas as separators
                StringTokenizer st = new StringTokenizer(data, ",");
                
                // extract customer information from tokens
                name = st.nextToken().trim();
                phoneNum = st.nextToken().trim();
                member = st.nextToken().trim();
                packages = st.nextToken().trim();
                reserveType = st.nextToken().trim();
                
                // create a reservation objects and store in array
                arrC[i] = new Reservation(new Customer(name, phoneNum, member), packages, reserveType);
                
                // read the next line from the file
                data = sbR.readLine();
                
                // increment the array index
                i++;
            }
            
            // print customer data
            String header =  "========================================\n" +
                             "         Luxe Glow Spa Customer Info    \n" +
                             "========================================\n\n";
            System.out.print(header);
            spW.print(header);

            for (int j = 0; j < i; j++) 
            {
                // calculate total sales of the week
                Reservation res = arrC[j];
                Customer cust = res.getCustomer();
                double price = res.calcPrice();
                double total = res.calcTotal();
                double discount = price - total;
                totalSales += total;

                StringBuilder customerDetails = new StringBuilder();
                customerDetails.append("========================================\n");
                customerDetails.append(String.format("Customer %d:\n", j + 1));
                customerDetails.append(String.format("Name             : %-20s\n", cust.getName()));
                customerDetails.append(String.format("Phone Number     : %-20s\n", cust.getPhoneNum()));
                customerDetails.append(String.format("Membership       : %-20s\n", cust.getMember()));
                customerDetails.append(String.format("Package          : %-20s\n", res.getPackages()));
                customerDetails.append(String.format("Reservation Type : %-20s\n", res.getReserveType()));

                if (res.getReserveType().equalsIgnoreCase("online")) 
                {
                    onlineReservation online = new onlineReservation(cust, res.getPackages(), "online", 0.00);
                    double reward = online.calcReward();
                    online.setRewardPoint(reward);

                    customerDetails.append(String.format("Reward Points    : %-20s\n", reward));
                    customerDetails.append(String.format("Points Voucher   : %-20s\n", (reward >= 100 ? "LGS24" : "-")));
                    customerDetails.append(String.format("Gift Voucher     : %-20s\n", "-"));

                } 
                else if (res.getReserveType().equalsIgnoreCase("walkIn")) 
                {
                    walkInReservation walkIn = new walkInReservation(cust, res.getPackages(), "walkIn", "");
                    String voucher = walkIn.formatGiftVoucher();
                    walkIn.setGiftVoucher(voucher);

                    customerDetails.append(String.format("Reward Points    : %-20s\n", "-"));
                    customerDetails.append(String.format("Points Voucher   : %-20s\n", "-"));
                    customerDetails.append(String.format("Gift Voucher     : %-20s\n", voucher));
                }

                customerDetails.append(String.format("Normal Price     : RM %-20s\n", price));
                customerDetails.append(String.format("Discount         : RM %-20s\n", discount));
                customerDetails.append(String.format("Total Payment    : RM %-20s\n", total));
                customerDetails.append("========================================\n\n");

                System.out.print(customerDetails);
                spW.print(customerDetails);
            }
            
            // print total sales
            String totalSalesStr = String.format("\nTotal Sales Of The Week: RM %.2f\n", totalSales);
            System.out.print(totalSalesStr);
            spW.print(totalSalesStr);

            // check if weekly target sales is reached
            if (totalSales >= 800.00) 
            {
                System.out.println("Weekly target sales reached!");
                spW.println("Weekly target sales reached!");
            }
            
            // arrays to store package sales and demand
            int[] packageDemand = new int[4];

            // iterate over the customers to analyze service demand
            for (int k = 0; k < i; k++) 
            {
                Reservation reserve = arrC[k];
                
                // check if reservation object is not null and accumulate demand for each package
                if (reserve != null) 
                {
                    switch (reserve.getPackages()) 
                    {
                        case "A":
                            packageDemand[0]++; 
                            break;
                        case "B":
                            packageDemand[1]++; 
                            break;
                        case "C":
                            packageDemand[2]++;
                            break;
                        case "D":
                            packageDemand[3]++;
                            break;
                    }
                }
            }

            // print analysis of total service taken for the week
            String analysisHeader = "\nAnalysis of total service taken for the week:\n";
            System.out.print(analysisHeader);
            spW.print(analysisHeader);

            int maxDemand = 0;
            char mostChosenPackage = ' ';

            // iterate over package demand to find the most chosen package
            for (int l = 0; l < packageDemand.length; l++) 
            {
                char packageType = (char) ('A' + l);
                
                // print the number of times each package is chosen
                String line = String.format("Package %c is chosen %d times.\n", packageType, packageDemand[l]);
                System.out.print(line);
                spW.print(line);
                
                // update most chosen package
                if (packageDemand[l] > maxDemand) 
                {
                    maxDemand = packageDemand[l];
                    mostChosenPackage = packageType;
                }
            }

            // print the most chosen package
            String mostChosen = String.format("\nThe most chosen package is: %c\n", mostChosenPackage);
            System.out.print(mostChosen);
            spW.print(mostChosen);

            System.out.println("\n------------------------------------------------------");
            spW.println("\n------------------------------------------------------");

            // update customer data and display the before and after
            System.out.println("\nLuxe Glow Spa Customer Information Update");
            
            System.out.println("\n------------------------------------------------------");
            spW.println("\n------------------------------------------------------");
            
            spW.println("\nLuxe Glow Spa Customer Information Update");

            System.out.println("[Customer 4 before update]");
            spW.println("[Customer 4 before update]");
            System.out.println(arrC[3].toString());
            spW.println(arrC[3].toString());

            arrC[3].setCustomer("Mira", "0112135589", "Member");

            System.out.println("\n[Customer 4 after update]");
            spW.println("\n[Customer 4 after update]");
            System.out.println(arrC[3].toString());
            spW.println(arrC[3].toString());

            // close the printWriter and BufferedReader
            spW.close();
            sbR.close();
            
        } 
        catch (IOException e) 
        {
            // print stack trace if an exception occurs
            e.printStackTrace();
        }
    }
}

