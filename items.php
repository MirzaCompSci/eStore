<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of items
 *
 * @author mirza_000
 */
class items {

    //put your code here
    private $itemCode;
    private $itemPrice;
    private $itemName;
    private $itemTaxable;
    private $itemTax;

    // getters
    public function getItemCode() {
        return $itemCode;
    }

    public function getItemPrice() {
        return $itemPrice;
    }

    public function getItemName() {
        return $itemName;
    }

    public function getItemTaxable() {
        return $itemTaxable;
    }

    public function getItemTax() {
        return $itemTax;
    }

    //setters
    public function setItemName($name) {
        $this->itemName = $name;
    }

    public function setItemCode($code) {
        $this->itemCode = $code;
    }

    public function setItemPrice($price) {
        $this->itemPrice = $price;
    }

    public function setItemTax($tax) {
        $this->itemTax = $tax;
    }

    public function setItemTaxable($taxable) {
        $this->itemTaxable = $taxable;
    }

}
