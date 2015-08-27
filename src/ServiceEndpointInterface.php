<?php

/**
 * @file
 * Contains Drupal\services\ServiceEndpointInterface.
 */

namespace Drupal\services;

use Drupal\Component\Serialization\SerializationInterface;
use Drupal\Core\Config\Entity\ConfigEntityInterface;
use Symfony\Component\HttpFoundation\Request;

/**
 * Provides an interface for defining service endpoint entities.
 */
interface ServiceEndpointInterface extends ConfigEntityInterface {

  /**
   * Returns the endpoint path to the API.
   * @return string
   */
  public function getEndpoint();

  /**
   * Returns the service provider ID.
   * @return string
   */
  public function getServiceProvider();

  /**
   * Processes the service endpoint request.
   * @return SerializationInterface
   */
  public function processRequest(Request $request);
}