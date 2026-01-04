<?php
namespace app\controllers;

class LoanCalcCtrl {

    private $result;

    public function action_loanCalc() {

        // 🔐 autoryzacja
        if (!\core\SessionUtils::load('user', true)) {
            \core\App::getRouter()->forwardTo('login');
            return;
        }

        $amount = $_POST['amount'] ?? null;
        $years  = $_POST['years'] ?? null;
        $rate   = $_POST['rate'] ?? null;

        if ($amount !== null && $years !== null && $rate !== null) {

            if (is_numeric($amount) && is_numeric($years) && is_numeric($rate)) {

                $months = $years * 12;
                $monthlyRate = ($rate / 100) / 12;

                if ($monthlyRate > 0) {
                    // rata annuitetowa
                    $this->result = round(
                        $amount * ($monthlyRate * pow(1 + $monthlyRate, $months)) /
                        (pow(1 + $monthlyRate, $months) - 1),
                        2
                    );
                } else {
                    // kredyt 0%
                    $this->result = round($amount / $months, 2);
                }

            } else {
                \core\Utils::addErrorMessage("Wszystkie wartości muszą być liczbami");
            }
        }

        \core\App::getSmarty()->assign('result', $this->result);
        \core\App::getSmarty()->display('LoanCalc.tpl');
    }
}
