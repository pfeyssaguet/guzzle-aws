<?php

namespace Guzzle\Aws\Mws\Type;

/**
 * Tax codes
 * 
 * @author Harold Asbridge <harold@shoebacca.com>
 * 
 * @codeCoverageIgnore
 */
class TaxCode
{
    // General
    const ALWAYS_TAXABLE = 'A_GEN_TAX';
    const ALWAYS_NONTAXABLE = 'A_GEN_NOTAX';
    
    // Books & Printed Materials
    const BOOKS_GENERAL = 'A_BOOKS_GEN';
    const BOOKS_RELIGIOUS = 'A_BOOKS_RELIG';
    const NEWSPAPER_SUBSCRIPTIONS_MORE_THAN_WEEKLY = 'A_NEWS_104PLUS';
    const NEWSPAPER_SUBSCRIPTIONS_WEEKLY = 'A_NEWS_52WKLY';
    const NEWSPAPER_SUBSCRIPTIONS_BIWEEKLY = 'A_NEWS_26BIWKLY';
    const NEWSPAPER_SUBSCRIPTIONS_QUARTERLY = 'A_NEWS_4QTLY';
    const PERIODICAL_SUBSCRIPTIONS_MORE_THAN_WEEKLY = 'A_PERDCL_104PLUS';
    const PERIODICAL_SUBSCRIPTIONS_WEEKLY = 'A_PERDCL_52WKLY';
    const PERIODICAL_SUBSCRIPTIONS_WEEKLY_TO_QUARTERLY = 'A_PERDCL_52W-4Q';
    const PERIODICAL_SUBSCRIPTIONS_SEMIANNUAL = 'A_PERDCL_SEMIANNL';
    const PERIODICAL_SUBSCRIPTIONS_ANNUAL = 'A_PERDCL_ANNUAL';
    const CLASSIFIED_PUBLICATIONS_WEEKLY = 'A_CLSFD_52WKLY';
    const CLASSIFIED_PUBLICATIONS_WEEKLY_TO_QUARTERLY = 'A_CLSFD_52W-4Q';
    const CLASSIFIED_PUBLICATIONS_SEMIANNL = 'A_CLSFD_SEMIANNL';
    const CLASSIFIED_PUBLICATIONS_ANNUAL = 'A_CLSFD_ANNUAL';
    
    // Apparel
    const CLOTHING_GENERAL = 'A_CLTH_GEN';
    const CLOTHING_BATHING_SUITS = 'A_CLTH_BATH';
    const CLOTHING_BELT_BUCKLES = 'A_CLTH_BUCKLS';
    const CLOTHING_COMPONENTS = 'A_CLTH_COMPON';
    const CLOTHING_ATHLETIC = 'A_CLTH_ATHL';
    const CLOTHING_COSTUMES = 'A_CLTH_CSTUMS';
    const CLOTHING_FORMAL = 'A_CLTH_FORMAL';
    const CLOTHING_FUR = 'A_CLTH_FUR';
    const CLOTHING_HANDKERCHIEFS = 'A_CLTH_HANDKE';
    const CLOTHING_HANDBAGS = 'A_CLTH_HBAGS';
    const CLOTHING_IMITATION_FOR = 'A_CLTH_IFUR';
    
    // Sporting Goods
    const SPORT_ATHLETIC_SHOES = 'A_SPORT_ATHLSHOES';
    const SPORT_ATHLETIC_SUPPORTER = 'A_SPORT_ASUPPORT';
    const SPORT_BICYCLE_HELMET = 'A_SPORT_BIKEHLMT';
    const SPORT_MISC_1 = 'A_SPORTS_MISCSPORTS1';
    const SPORT_SNOW_SKI_SUIT = 'A_SPORT_SKISUIT';
    
    // Food
    const FOOD_GENERAL = 'A_FOOD_GEN';
    const FOOD_CANDY = 'A_FOOD_CNDY';
    const FOOD_CANDY_CONTAINING_FLOUR = 'A_FOOD_CNDYFL';
    const FOOD_GENERAL_BASKET_76_TO_90_PERCENT = 'A_FOOD_BKTGN76-90';
    const FOOD_GENERAL_BASKET_50_TO_75_PERCENT = 'A_FOOD_BKTGN50-75';
    const FOOD_CANDY_BASKET_50_TO_90_PERCENT = 'A_FOOD_BKTCDY50-90';
    const FOOD_JUICE_0_TO_50_PERCENT = 'A_FOOD_JUICE0-50';
    const FOOD_JUICE_51_TO_99_PERCENT = 'A_FOOD_JUICE51-99';
    const FOOD_CARBONATED_SOFT_DRINKS = 'A_FOOD_CARBSFTDK';
    const FOOD_CARBONATED_WATER = 'A_FOOD_CARBWTR';
    const FOOD_NONCARBONATED_WATER = 'A_FOOD_NCARBWTR';
    
    // School Supplies
    const SCHOOL_SUPPLIES = 'A_SCHL_SUPPLS';
    
    // Computers
    const COMPUTER_OR_BUNDLE = 'A_COMP_COMPUTER';
    const COMPUTER_GAMING_PERIPHERALS = 'A_COMP_GAMPER';
    const COMPUTER_PDA = 'A_COMP_PDA';
    const COMPUTER_PERIPHERALS = 'A_COMP_PERIPH';
    const COMPUTER_PRINTER_SUPPLIES = 'A_COMP_PRTSUP';
    const COMPUTER_PRINTERS = 'A_COMP_PRINT';
    const COMPUTER_EDUCATIONAL_SOFTWARE = 'A_COMP_EDUSOFT';
    const COMPUTER_OPERATIONAL_SOFTWARE = 'A_COMP_SOFTOP';
    const COMPUTER_RECREATIONAL_SOFTWARE = 'A_COMP_SOFTRC';
    
    // Warranties
    const WARRANTIES_PARTS_OR_SERVICE = 'A_WARR_PARTSNSRVC';
    
    // Services
    const SERVICES_INSTALLATION = 'A_SERV_INSTALL';
    
    // Electronic Goods
    const ELECTRONICS_DOWNLOADABLE_SOFTWARE = 'A_EGOODS_SOFT';
    const ELECTRONICS_MISC_EGOODS = 'A_EGOODS_MISC1';
    const ELECTRONICS_DIGITAL_MUSIC_DOWNLOADS = 'A_EGOODS_DIGITALMUSIC';
    const ELECTRONICS_DIGITAL_EBOOKS = 'A_EGOODS_DIGITALBOOKS';
    const ELECTRONICS_DIGITAL_GAMES = 'A_EGOODS_DIGITALGAMES';
    const ELECTRONICS_GAMING_SUBSCRIPTION = 'A_EGOODS_ONLINEGAMINGSUBS';
    const ELECTRONICS_DIGITAL_NEWS_SINGLE = 'A_EGOODS_DIGITALNEWS';
    const ELECTRONICS_DIGITAL_NEWS_SUBSCRIPTIONS = 'A_EGOODS_DIGITALNEWSSUBS';
    const ELECTRONICS_PERIODICALS_SINGLE = 'A_EGOODS_DIGITALPERDCL';
    const ELECTRONICS_PERIODICALS_SUBSCRIPTIONS = 'A_EGOODS_DIGITALPERDCLSUBS';
    
    // Health and Beauty
    const HEALTH_OTC_MEDICATION = 'A_HLTH_OTCMED';
    const HEALTH_SPECIFIC_OTC_MEDICATION = 'A_HLTH_SPFCOTCMED';
    const HEALTH_SPECIFIC_ORAL_HYGIENE = 'A_HLTH_SPFCORALHYG';
    const HEALTH_CONTACT_LENS_SOLUTION = 'A_HLTH_CONTACTSOLN';
    const HEALTH_SUNSCREEN = 'A_HLTH_SUNSCREEN';
    const HEALTH_BANGAGES = 'A_HLTH_BANDKIT';
    const HEALTH_THERMOMETER = 'A_HLTH_THRMTR';
    const HEALTH_FEMININE_HYGIENE = 'A_HLTH_FEMHYG';
    const HEALTH_TISSUES = 'A_HLTH_TISSUETOW';
    const HEALTH_INCONTINENT_AIDS = 'A_HLTH_INCONT';
    const HEALTH_CONTRACEPTIVES = 'A_HLTH_CONTRCEPV';
    const HEALTH_FAMILY_PLANNING_PRODUCTS = 'A_HLTH_FAMPLANTEST';
    const HEALTH_BABY_SUPPLIES = 'A_HLTH_BABYSUPPLS';
    const HEALTH_DIETARY_SUPPLEMENTS = 'A_HLTH_DIETSUPMT';
    const HEALTH_MONITORS = 'A_HLTH_MONITOR';
    const HEALTH_DIABETIC_SUPPLIS = 'A_HLTH_DIABSUPPLS';
    const HEALTH_PROSTHETIC = 'A_HLTH_PROSTHETIC';
    const HEALTH_MOBILITy_AIDS = 'A_HLTH_MOBILITY';
    
    // Infant and Baby Supplies
    const BABY_BREAST_PUMPS = 'A_BABY_BRSTPUMP';
    const BABY_CLOTHING = 'A_BABY_CLOTH';
    const BABY_CAR_SEATS = 'A_BABY_CARSEAT';
    
}