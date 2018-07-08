<?php

namespace XSpeedPay\Base;

interface BaseOperations
{
    /**
     * @param Request $request
     *
     * @return Response
     */
    public function authorize(Request $request);

    /**
     * @param Request $request
     *
     * @return Response
     */
    public function purchase(Request $request);

    /**
     * @param Request $request
     *
     * @return Response
     */
    public function void(Request $request);

    /**
     * @param Request $request
     *
     * @return Response
     */
    public function refund(Request $request);

    /**
     * @param Request $request
     *
     * @return Response
     */
    public function capture(Request $request);
}