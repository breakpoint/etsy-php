<?php
    
namespace breakpoint\etsy\Resources;

use breakpoint\etsy\Classes\EtsyRequest;

/**
 * Represents methods available at: https://www.etsy.com/developers/documentation/reference/feedback
 *
 * Class Feedback
 * @package breakpoint\etsy
 */
class Feedback extends EtsyRequest {

    /**
     * Retrieves a set of Feedback objects associated to a User.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findAllUserFeedbackAsAuthor(array $parameters = []) {
        return $this->get('/users/:user_id/feedback/as-author', $parameters);
    }

    /**
     * Retrieves a set of Feedback objects associated to a User.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findAllUserFeedbackAsBuyer(array $parameters = []) {
        return $this->get('/users/:user_id/feedback/as-buyer', $parameters);
    }

    /**
     * Retrieves a set of Feedback objects associated to a User.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findAllUserFeedbackAsSeller(array $parameters = []) {
        return $this->get('/users/:user_id/feedback/as-seller', $parameters);
    }

    /**
     * Retrieves a set of Feedback objects associated to a User.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findAllUserFeedbackAsSubject(array $parameters = []) {
        return $this->get('/users/:user_id/feedback/as-subject', $parameters);
    }

    /**
     * 
                    Returns a set of FeedBack objects associated to a User.
                    This is essentially the union between the findAllUserFeedbackAsBuyer
                    and findAllUserFeedbackAsSubject methods.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findAllFeedbackFromBuyers(array $parameters = []) {
        return $this->get('/users/:user_id/feedback/from-buyers', $parameters);
    }

    /**
     * 
                    Returns a set of FeedBack objects associated to a User.
                    This is essentially the union between
                    the findAllUserFeedbackAsBuyer and findAllUserFeedbackAsSubject methods.
     *
     * @param array $parameters
     * @return bool|\breakpoint\etsy\Classes\EtsyResults|\Psr\Http\Message\MessageInterface
     * @throws \Exception
     */
    public function findAllFeedbackFromSellers(array $parameters = []) {
        return $this->get('/users/:user_id/feedback/from-sellers', $parameters);
    }

}