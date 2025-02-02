<html>
    <body>
        <?<php
        // encapulsation
        class BankAccount{
            private $balance;

            public function setBalance($amount){
                if($amount>0){
                    $this->balance =$amount;

                }
            }
            public function getBalance(){
                return $this->balance;
            }
        }
        $account = new bankAccount();
        $account->setBalance(200000);
        class BankAccount{
            private $balance;

            public function setBalance($amount){
                if($amount>0){
                    $this->balance = $amount;
                }
            }
            public function getBalance(){
                return $this->balance;
            }
        }
        $account = new BankAccount();
        $account->setBalance(200000);
        echo "Account Balance :" . $account->getbalance();
        ?>
        </body>
        </html>