//
//  SecondViewController.swift
//  NannyShack
//
//  Created by Zach Albers on 2018-06-26.
//  Copyright © 2018 Zach Albers. All rights reserved.
//

import Foundation


import UIKit



class SecondViewController: UIViewController {
    
        let URL_SAVE_TEAM = "http://localhost:8080/TheNannyShack/addAClientIOS.php"


    @IBOutlet weak var name: UITextField!
    @IBOutlet weak var passwordEntry: UITextField!
    @IBOutlet weak var passwordReEntry: UITextField!
    @IBOutlet weak var phoneNumber: UITextField!
    
    @IBAction func addClientButton(_ sender: UIButton) {
        //created NSURL
        let requestURL = NSURL(string: URL_SAVE_TEAM)
        
        //creating NSMutableURLRequest
        let request = NSMutableURLRequest(url: requestURL! as URL)
        
        //setting the method to post
        request.httpMethod = "POST"
        
        //getting values from text fields
        
        let dDname = name.text
        let dDpasswordEntry = passwordEntry.text
        let dDpasswordReEntry = passwordReEntry.text
        let dDphoneNumber = phoneNumber.text
        
        
        
        //creating the post parameter by concatenating the keys and values from text field
        let postParameters = "user="+dDname!+"&pass1="+dDpasswordEntry!+"&pass2="+dDpasswordReEntry!+"&contact="+dDphoneNumber!;
        
        //adding the parameters to request body
        request.httpBody = postParameters.data(using: String.Encoding.utf8)
        
        
        //creating a task to send the post request
        let task = URLSession.shared.dataTask(with: request as URLRequest){
            data, response, error in
            
            if error != nil{
                print("error is \(String(describing: error))")
                return;
            }
            
            //parsing the response
            do {
                //converting resonse to NSDictionary
                let myJSON =  try JSONSerialization.jsonObject(with: data!, options: JSONSerialization.ReadingOptions.allowFragments) as? NSDictionary
                
                //parsing the json
                if let parseJSON = myJSON {
                    
                    //creating a string
                    var msg : String!
                    
                    //getting the json response
                    msg = parseJSON["message"] as! String?
                    //                    self.errorTextBox.text = msg
                    //printing the response
                    print(msg)
                    
                }
            } catch {
                print(error)
            }
            
        }
        //executing the task
        task.resume()
    }
    
    
    
    
    override func viewDidLoad() {
        super.viewDidLoad()
        // Do any additional setup after loading the view, typically from a nib.
    }
    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }

}
