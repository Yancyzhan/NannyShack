//
//  ViewController.swift
//  NannyShack
//
//  Created by Zach Albers on 2018-06-26.
//  Copyright © 2018 Zach Albers. All rights reserved.
//

import UIKit



class ViewController: UIViewController {

    let URL_SAVE_TEAM = "http://localhost:8080/TheNannyShack/adminAuthenicationIOS.php"


    @IBOutlet weak var errorText: UILabel!
    
    @IBOutlet weak var textFieldName: UITextField!

    @IBOutlet weak var textFieldMember: UITextField!

    @IBAction func buttonSave(_ sender: Any) {
        print("PRESSSSSEEEEED")
        
    }
    
    
    override func shouldPerformSegue(withIdentifier buttonID: String, sender: Any?) -> Bool {
        var willLogin = true
        //created NSURL
        let requestURL = NSURL(string: URL_SAVE_TEAM)
        
        //creating NSMutableURLRequest
        let request = NSMutableURLRequest(url: requestURL! as URL)
        
        //setting the method to post
        request.httpMethod = "POST"
        
        //getting values from text fields
        let teamName=textFieldName.text
        let memberCount = textFieldMember.text
        
        
        errorText.text =  ""
        if teamName == "" {
            willLogin = false
            errorText.text = "Please enter your Username"
        }
            
        if memberCount == "" {
            willLogin = false
            errorText.text = "Please enter your Password"
        }
        
        //creating the post parameter by concatenating the keys and values from text field
        let postParameters = "user_id="+teamName!+"&user_pass="+memberCount!;
        
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
                    //                    if msg != "Correct Credentials" {
                    //                        willLogin = false
                    //
                    //                    }
                    
                }
            } catch {
                print(error)
            }
            
        }
        //executing the task
        
        task.resume()
        
        return willLogin
        
        
        
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


