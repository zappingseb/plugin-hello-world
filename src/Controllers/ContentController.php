<?php
namespace HelloWorld\Controllers;

use Ceres\Widgets\Helper\BaseWidget;
use IO\Services\Order\Factories\OrderResultFactory;

class ContentController extends Controller
{
    /**
     * @inheritdoc
     */
    public function sayHello(Twig $twig):string
    {
        /** @var OrderResultFactory $orderResultFactory */
        $orderResultFactory = pluginApp(OrderResultFactory::class);
        $order = $orderResultFactory->fillOrderResult();

	return $twig->render('HelloWorld::TEMPLATE', ['data' => $order]);

    }
}
