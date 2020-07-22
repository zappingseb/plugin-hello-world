<?php
namespace HelloWorld\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;
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
