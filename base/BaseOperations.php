<?php

namespace XSpeedPay\Base;

interface BaseOperations
{
    /**
     * @param Request $request
     *
     * @return Response
     */
    public function authorize(Request $request): Response;

    /**
     * @param Request $request
     *
     * @return Response
     */
    public function purchase(Request $request): Response;

    /**
     * @param Request $request
     *
     * @return Response
     */
    public function void(Request $request): Response;

    /**
     * @param Request $request
     *
     * @return Response
     */
    public function refund(Request $request): Response;

    /**
     * @param Request $request
     *
     * @return Response
     */
    public function capture(Request $request): Response;
}