<?php
namespace Guzzle\Aws\Mws\Model\Feed\ProductFeed;

use Guzzle\Aws\Mws\Model\Feed\ProductFeed\AbstractProduct;

use Guzzle\Aws\Mws\Model\Feed\Schema\DataType;


/**
 * Shoe product feed item
 *
 * Represents a Shoe product
 *
 * @author Jason Ragsdale <jason@shoebacca.com>
 */
class ShoeProduct extends AbstractProduct
{
    /**
     * @param string $value
     *
     * @return ClothingProduct
     */
    public function addDepartment($value)
    {
        return $this->add('Department', $value, 10);
    }

    /**
     * @param string $value
     *
     * @return ClothingProduct
     */
    public function addStyleKeywords($value)
    {
        return $this->add('StyleKeywords', $value, 10);
    }

    /**
     * @param string $value
     *
     * @return ShoeProduct
     */
    public function setClothingType($value)
    {
        if (!in_array($value, array(
            'Accessory',
            'Bag',
            'Shoes',
            'ShoeAccessory',
            'Handbag',
            'Eyewear'
        ))
        ) {
            throw new \InvalidArgumentException('Invalid clothing type');
        }

        return $this->set('ClothingType', $value);
    }

    /**
     * @param string $value (parent or child)
     *
     * @return ShoeProduct
     */
    public function setParentage($value)
    {
        if (!in_array($value, array(
            'parent',
            'child'
        ))
        ) {
            throw new \InvalidArgumentException('Invalid parentage value');
        }

        return $this->set('Parentage', $value);
    }

    /**
     * @param string $value
     *
     * @return ShoeProduct
     */
    public function setSize($value)
    {
        return $this->set('Size', $value);
    }

    /**
     * @param string $value
     *
     * @return ShoeProduct
     */
    public function setColor($value)
    {
        return $this->set('Color', $value);
    }

    /**
     * @param string $value (Size, Color, or SizeColor)
     *
     * @return ShoeProduct
     */
    public function setVariationTheme($value)
    {
        if (!in_array($value, array(
            'Size',
            'Color',
            'SizeColor',
            'ColorName-MagnificationStrength',
            'ColorName-LensColor',
            'ColorName-LensWidth'
        ))
        ) {
            throw new \InvalidArgumentException('Invalid variation theme');
        }

        return $this->set('VariationTheme', $value);
    }

    /**
     * @param string $value (2-char country code)
     *
     * @return ShoeProduct
     */
    public function setCountryOfOrigin($value)
    {
        if (strlen($value) != 2) {
            throw new \InvalidArgumentException('Invalid country code');
        }

        return $this->set('CountryOfOrigin', $value);
    }

    /**
     * @param string $value
     *
     * @return ShoeProduct
     */
    public function setColorMap($value)
    {
        return $this->set('ColorMap', $value);
    }

    /**
     * @param string $value
     *
     * @return ShoeProduct
     */
    public function setSizeMap($value)
    {
        return $this->set('SizeMap', $value);
    }

    /**
     * @param string $value
     *
     * @return ShoeProduct
     */
    public function setArchType($value)
    {
        return $this->set('ArchType', $value);
    }

    /**
     * @param DataType\LengthDimension $value
     *
     * @return ShoeProduct
     */
    public function setArmLength(DataType\LengthDimension $value)
    {
        return $this->set('ArmLength', $value);
    }

    /**
     * @param string $value
     *
     * @return ShoeProduct
     */
    public function setBeltStyle($value)
    {
        return $this->set('BeltStyle', $value);
    }

    /**
     * @param DataType\LengthDimension $value
     *
     * @return ShoeProduct
     */
    public function setBootOpeningCircumference(DataType\LengthDimension $value)
    {
        return $this->set('BootOpeningCircumference', $value);
    }

    /**
     * @param DataType\LengthDimension $value
     *
     * @return ShoeProduct
     */
    public function setBridgeWidth(DataType\LengthDimension $value)
    {
        return $this->set('BridgeWidth', $value);
    }

    /**
     * @param string $value
     *
     * @return ShoeProduct
     */
    public function setCareInstructions($value)
    {
        return $this->set('CareInstructions', $value);
    }

    /**
     * @param string $value
     *
     * @return ShoeProduct
     */
    public function setShoeClosureType($value)
    {
        return $this->set('ShoeClosureType', $value);
    }

    /**
     * @param string $value
     *
     * @return ShoeProduct
     */
    public function setCountryProducedIn($value)
    {
        return $this->set('CountryProducedIn', $value);
    }

    /**
     * @param string $value
     *
     * @return ShoeProduct
     */
    public function setCleatDescription($value)
    {
        return $this->set('CleatDescription', $value);
    }

    /**
     * @param string $value
     *
     * @return ShoeProduct
     */
    public function setCleatMaterialType($value)
    {
        return $this->set('CleatMaterialType', $value);
    }

    /**
     * @param string $value
     *
     * @return ShoeProduct
     */
    public function setDepartment($value)
    {
        return $this->set('Department', $value);
    }

    /**
     * @param string $value
     *
     * @return ShoeProduct
     */
    public function setExternalTestingCertification($value)
    {
        return $this->set('ExternalTestingCertification', $value);
    }

    /**
     * @param string $value
     *
     * @return ShoeProduct
     */
    public function setFabricType($value)
    {
        return $this->set('FabricType', $value);
    }

    /**
     * @param string $value
     *
     * @return ShoeProduct
     */
    public function setFabricWash($value)
    {
        return $this->set('FabricWash', $value);
    }

    /**
     * @param string $value
     *
     * @return ShoeProduct
     */
    public function setFrameMaterialType($value)
    {
        return $this->set('FrameMaterialType', $value);
    }

    /**
     * @param DataType\LengthDimension $value
     *
     * @return ShoeProduct
     */
    public function setHeelHeight(DataType\LengthDimension $value)
    {
        return $this->set('HeelHeight', $value);
    }

    /**
     * @param string $value
     *
     * @return ShoeProduct
     */
    public function setHeelType($value)
    {
        return $this->set('HeelType', $value);
    }

    /**
     * @param string $value
     *
     * @return ShoeProduct
     */
    public function setInnerMaterial($value)
    {
        return $this->set('InnerMaterial', $value);
    }

    /**
     * @param string $value
     *
     * @return ShoeProduct
     */
    public function setIsStainResistant($value)
    {
        return $this->set('IsStainResistant', (bool) $value);
    }

    /**
     * @param string $value
     *
     * @return ShoeProduct
     */
    public function setItemShape($value)
    {
        return $this->set('ItemShape', $value);
    }

    /**
     * @param string $value
     *
     * @return ShoeProduct
     */
    public function setLensColor($value)
    {
        return $this->set('LensColor', $value);
    }

    /**
     * @param string $value
     *
     * @return ShoeProduct
     */
    public function setLensColorMap($value)
    {
        return $this->set('LensColorMap', $value);
    }

    /**
     * @param DataType\LengthDimension $value
     *
     * @return ShoeProduct
     */
    public function setLensHeight(DataType\LengthDimension $value)
    {
        return $this->set('LensHeight', $value);
    }

    /**
     * @param string $value
     *
     * @return ShoeProduct
     */
    public function setLensMaterialType($value)
    {
        return $this->set('LensMaterialType', $value);
    }

    /**
     * @param DataType\LengthDimension $value
     *
     * @return ShoeProduct
     */
    public function setLensWidth(DataType\LengthDimension $value)
    {
        return $this->set('LensWidth', $value);
    }

    /**
     * @param string $value
     *
     * @return ShoeProduct
     */
    public function setLiningDescription($value)
    {
        return $this->set('LiningDescription', $value);
    }

    /**
     * @param string $value
     *
     * @return ShoeProduct
     */
    public function setOccasionAndLifestyle($value)
    {
        return $this->set('OccasionAndLifestyle', $value);
    }

//TODO: ->writeNode('MagnificationStrength') Dimension

    /**
     * @param string $value
     *
     * @return ShoeProduct
     */
    public function setMaterialComposition($value)
    {
        return $this->set('MaterialComposition', $value);
    }

    /**
     * @param string $value
     *
     * @return ShoeProduct
     */
    public function setMaterialType($value)
    {
        return $this->set('MaterialType', $value);
    }

    /**
     * @param string $value
     *
     * @return ShoeProduct
     */
    public function setModelNumber($value)
    {
        return $this->set('ModelNumber', $value);
    }

    /**
     * @param string $value
     *
     * @return ShoeProduct
     */
    public function setModelName($value)
    {
        return $this->set('ModelName', $value);
    }

    /**
     * @param string $value
     *
     * @return ShoeProduct
     */
    public function setModelYear($value)
    {
        return $this->set('ModelYear', $value);
    }

    /**
     * @param string $value
     *
     * @return ShoeProduct
     */
    public function setOuterMaterialType($value)
    {
        return $this->set('OuterMaterialType', $value);
    }

    /**
     * @param string $value
     *
     * @return ShoeProduct
     */
    public function setMaterialOpacity($value)
    {
        return $this->set('MaterialOpacity', $value);
    }

    /**
     * @param string $value
     *
     * @return ShoeProduct
     */
    public function setPatternStyle($value)
    {
        return $this->set('PatternStyle', $value);
    }

    /**
     * @param string $value
     *
     * @return ShoeProduct
     */
    public function setPerformanceRating($value)
    {
        return $this->set('PerformanceRating', $value);
    }

//TODO: ->writeNode('PlatformHeight') Dimension

    /**
     * @param string $value
     *
     * @return ShoeProduct
     */
    public function setPocketDescription($value)
    {
        return $this->set('PocketDescription', $value);
    }

    /**
     * @param string $value
     *
     * @return ShoeProduct
     */
    public function setPolarizationType($value)
    {
        return $this->set('PolarizationType', $value);
    }

    /**
     * @param string $value
     *
     * @return ShoeProduct
     */
    public function setSeason($value)
    {
        return $this->set('Season', $value);
    }

//TODO: ->writeNode('ShaftHeight') StringLengthOptionalDimension
//TODO: ->writeNode('ShaftWidth') StringLengthOptionalDimension
//TODO: ->writeNode('ShaftDiameter') StringLengthOptionalDimension
    /**
     * @param DataType\LengthDimension $value
     *
     * @return ShoeProduct
     */
    public function setShoulderStrapDrop(DataType\LengthDimension $value)
    {
        return $this->set('ShoulderStrapDrop', $value);
    }

//TODO: ->writeNode('ShoeHeightMap') Dimension

    /**
     * @param string $value
     *
     * @return ShoeProduct
     */
    public function setSpecialSizeType($value)
    {
        return $this->set('SpecialSizeType', $value);
    }

    /**
     * @param string $value
     *
     * @return ShoeProduct
     */
    public function setSoleMaterial($value)
    {
        return $this->set('SoleMaterial', $value);
    }

    /**
     * @param string $value
     *
     * @return ShoeProduct
     */
    public function setStrapType($value)
    {
        return $this->set('StrapType', $value);
    }

    /**
     * @param string $value
     *
     * @return ShoeProduct
     */
    public function setSpecialFeatures($value)
    {
        return $this->set('SpecialFeatures', $value);
    }

    /**
     * @param string $value
     *
     * @return ShoeProduct
     */
    public function setSpecificUses($value)
    {
        return $this->set('SpecificUses', $value);
    }

    /**
     * @param string $value
     *
     * @return ShoeProduct
     */
    public function setCharacter($value)
    {
        return $this->set('Character', $value);
    }

    /**
     * @param string $value
     *
     * @return ShoeProduct
     */
    public function setToeShape($value)
    {
        return $this->set('ToeShape', $value);
    }

    /**
     * @param DataType\ClothingSizeDimension $value
     *
     * @return ShoeProduct
     */
    public function setWaistSize(DataType\ClothingSizeDimension $value)
    {
        return $this->set('WaistSize', $value);
    }

    /**
     * @param string $value
     *
     * @return ShoeProduct
     */
    public function setWaistStyle($value)
    {
        return $this->set('WaistStyle', $value);
    }

    /**
     * @param string $value
     *
     * @return ShoeProduct
     */
    public function setWheelType($value)
    {
        return $this->set('WheelType', $value);
    }

    /**
     * @param string $value
     *
     * @return ShoeProduct
     */
    public function setWaterResistanceLevel($value)
    {
        if (!in_array($value, array(
            'waterproof',
            'not_water_resistant',
            'water_resistant'
        ))
        ) {
            throw new \InvalidArgumentException('Invalid water resistance level');
        }

        return $this->set('WaterResistanceLevel', $value);
    }

    /**
     * @param string $value
     *
     * @return ShoeProduct
     */
    public function setPatternName($value)
    {
        return $this->set('PatternName', $value);
    }

    /**
     * @param string $value
     *
     * @return ShoeProduct
     */
    public function setSafetyWarning($value)
    {
        return $this->set('SafetyWarning', $value);
    }

    /**
     * @param string $value
     *
     * @return ShoeProduct
     */
    public function setManufacturerWarrantyType($value)
    {
        return $this->set('ManufacturerWarrantyType', $value);
    }

    /**
     * @param string $value
     *
     * @return ShoeProduct
     */
    public function setMfrWarrantyDescriptionLabor($value)
    {
        return $this->set('MfrWarrantyDescriptionLabor', $value);
    }

    /**
     * @param string $value
     *
     * @return ShoeProduct
     */
    public function setMfrWarrantyDescriptionParts($value)
    {
        return $this->set('MfrWarrantyDescriptionParts', $value);
    }

    /**
     * @param string $value
     *
     * @return ShoeProduct
     */
    public function setSellerWarrantyDescription($value)
    {
        return $this->set('SellerWarrantyDescription', $value);
    }

    /**
     * @param string $value
     *
     * @return ShoeProduct
     */
    public function setStyleKeywords($value)
    {
        return $this->set('StyleKeywords', $value);
    }

    /**
     * @param string $value
     *
     * @return ShoeProduct
     */
    public function setStyleName($value)
    {
        return $this->set('StyleName', $value);
    }

    /**
     * @param string $value
     *
     * @return ShoeProduct
     */
    public function setTeamName($value)
    {
        return $this->set('TeamName', $value);
    }

    /**
     * @param string $value
     *
     * @return ShoeProduct
     */
    public function setToeStyle($value)
    {
        return $this->set('ToeStyle', $value);
    }

    /**
     * @param string $value
     *
     * @return ShoeProduct
     */
    public function setNumberOfItems($value)
    {
        return $this->set('NumberOfItems', $value);
    }

    /**
     * @param DataType\WeightDimension $value
     *
     * @return ShoeProduct
     */
    public function setItemDisplayWeight(DataType\WeightDimension $value)
    {
        return $this->set('ItemDisplayWeight', $value);
    }

    /**
     * @param DataType\VolumeDimension $value
     *
     * @return ShoeProduct
     */
    public function setItemDisplayVolume(DataType\VolumeDimension $value)
    {
        return $this->set('ItemDisplayVolume', $value);
    }

    /**
     * @param DataType\LengthDimension $value
     *
     * @return ShoeProduct
     */
    public function setItemDisplayLength(DataType\LengthDimension $value)
    {
        return $this->set('ItemDisplayLength', $value);
    }

    /**
     * @param DataType\LengthDimension $value
     *
     * @return ShoeProduct
     */
    public function setItemDisplayWidth(DataType\LengthDimension $value)
    {
        return $this->set('ItemDisplayWidth', $value);
    }

    /**
     * @param DataType\LengthDimension $value
     *
     * @return ShoeProduct
     */
    public function setItemDisplayHeight(DataType\LengthDimension $value)
    {
        return $this->set('ItemDisplayHeight', $value);
    }

    /**
     * Write XML output
     *
     * @return ShoeProduct
     */
    public function writeXml()
    {
        $this->xml->startElement('Product');

        parent::writeXml();

        $this->xml->startElement('ProductData');
        $this->xml->startElement('Shoes');

        $this->writeNode('ClothingType');

        $this->xml->startElement('VariationData');
        $this
            ->writeNode('Parentage')
            ->writeNode('Size')
            ->writeNode('Color')
            ->writeNode('VariationTheme');
        $this->xml->endElement();

        $this->xml->startElement('ClassificationData');
        $this
            ->writeNode('CountryOfOrigin')
            ->writeNode('ColorMap')
            ->writeNode('SizeMap')
            ->writeNode('ArchType')
            ->writeNode('ArmLength')
            ->writeNode('BeltStyle')
            ->writeNode('BootOpeningCircumference')
            ->writeNode('BridgeWidth')
            ->writeNode('CareInstructions')
            ->writeNode('ShoeClosureType')
            ->writeNode('CountryProducedIn')
            ->writeNode('CleatDescription')
            ->writeNode('CleatMaterialType')
            ->writeNode('Department')
            ->writeNode('ExternalTestingCertification')
            ->writeNode('FabricType')
            ->writeNode('FabricWash')
            ->writeNode('FrameMaterialType')
            ->writeNode('HeelHeight')
            ->writeNode('HeelType')
            ->writeNode('InnerMaterial')
            ->writeNode('IsStainResistant')
            ->writeNode('ItemShape')
            ->writeNode('LensColor')
            ->writeNode('LensColorMap')
            ->writeNode('LensHeight')
            ->writeNode('LensMaterialType')
            ->writeNode('LensWidth')
            ->writeNode('LiningDescription')
            ->writeNode('OccasionAndLifestyle')
            ->writeNode('MagnificationStrength')
            ->writeNode('MaterialComposition')
            ->writeNode('MaterialType')
            ->writeNode('ModelNumber')
            ->writeNode('ModelName')
            ->writeNode('ModelYear')
            ->writeNode('OuterMaterialType')
            ->writeNode('MaterialOpacity')
            ->writeNode('PatternStyle')
            ->writeNode('PerformanceRating')
            ->writeNode('PlatformHeight')
            ->writeNode('PocketDescription')
            ->writeNode('PolarizationType')
            ->writeNode('Season')
            ->writeNode('ShaftHeight')
            ->writeNode('ShaftWidth')
            ->writeNode('ShaftDiameter')
            ->writeNode('ShoulderStrapDrop')
            ->writeNode('ShoeHeightMap')
            ->writeNode('SpecialSizeType')
            ->writeNode('SoleMaterial')
            ->writeNode('StrapType')
            ->writeNode('SpecialFeatures')
            ->writeNode('SpecificUses')
            ->writeNode('Character')
            ->writeNode('ToeShape')
            ->writeNode('WaistSize')
            ->writeNode('WaistStyle')
            ->writeNode('WheelType')
            ->writeNode('WaterResistanceLevel')
            ->writeNode('PatternName')
            ->writeNode('SafetyWarning')
            ->writeNode('ManufacturerWarrantyType')
            ->writeNode('MfrWarrantyDescriptionLabor')
            ->writeNode('MfrWarrantyDescriptionParts')
            ->writeNode('SellerWarrantyDescription')
            ->writeNode('StyleKeywords')
            ->writeNode('StyleName')
            ->writeNode('TeamName')
            ->writeNode('ToeStyle')
            ->writeNode('NumberOfItems')
            ->writeNode('ItemDisplayWeight')
            ->writeNode('ItemDisplayVolume')
            ->writeNode('ItemDisplayLength')
            ->writeNode('ItemDisplayWidth')
            ->writeNode('ItemDisplayHeight');
        $this->xml->endElement();

        $this->xml->endElement(); // End Clothing
        $this->xml->endElement(); // End ProductData
        $this->xml->endElement(); // End Product
    }
}