<?php
use usni\UsniAdaptor;
use usni\library\components\UiHtml;
?>
<table style="display: none;">
    <tr class="option-value-row-dummy">
        <td class="text-left">
            <?php echo $dropdown; ?>
        </td>
        <td class="text-right">
            <input type="text" name="ProductOptionMapping[quantity][]" value="" placeholder="<?php echo UsniAdaptor::t('products', 'Quantity');?>" class="form-control">
        </td>
        <td class="text-left">
            <?php echo UiHtml::dropDownList('ProductOptionMapping[subtract_stock][]', 
                                        '1', 
                                        ['1' => UsniAdaptor::t('application', 'Yes'),
                                         '0' => UsniAdaptor::t('application', 'No')],
                                        ['class' => 'form-control']
                                       )
        ?>
        </td>
        <td class="text-right">
            <?php echo UiHtml::dropDownList('ProductOptionMapping[price_prefix][]', 
                                        '+', 
                                        ['+' => '+',
                                         '-' => '-'],
                                        ['class' => 'form-control']
                                       )
            ?>
            <input type="text" name="ProductOptionMapping[price][]" value="" placeholder="<?php echo UsniAdaptor::t('products', 'Price');?>" class="form-control"></td>
        <td class="text-right">
            <?php echo UiHtml::dropDownList('ProductOptionMapping[weight_prefix][]', 
                                        '+', 
                                        ['+' => '+',
                                         '-' => '-'],
                                        ['class' => 'form-control']
                                       )
        ?>
            <input type="text" name="ProductOptionMapping[weight][]" value="" placeholder="<?php echo UsniAdaptor::t('products', 'Weight');?>" class="form-control"></td>
        <td class="text-left">
            <button type="button" onclick="$(this).tooltip('destroy');
                        $(this).closest('.option-value-row').remove();" data-toggle="tooltip" title="" class="btn btn-danger" data-original-title="<?php echo UsniAdaptor::t('products', 'Remove');?>">
                <i class="fa fa-minus-circle"></i>
            </button>
        </td>
    </tr>
</table>