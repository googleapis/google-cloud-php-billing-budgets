<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/billing/budgets/v1/budget_model.proto

namespace Google\Cloud\Billing\Budgets\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A budget is a plan that describes what you expect to spend on Cloud
 * projects, plus the rules to execute as spend is tracked against that plan,
 * (for example, send an alert when 90% of the target spend is met).
 * The budget time period is configurable, with options such as month (default),
 * quarter, year, or custom time period.
 *
 * Generated from protobuf message <code>google.cloud.billing.budgets.v1.Budget</code>
 */
class Budget extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Resource name of the budget.
     * The resource name implies the scope of a budget. Values are of the form
     * `billingAccounts/{billingAccountId}/budgets/{budgetId}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * User data for display name in UI. The name must be less than or equal to 60
     * characters.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     */
    protected $display_name = '';
    /**
     * Optional. Filters that define which resources are used to compute the
     * actual spend against the budget amount, such as projects, services, and the
     * budget's time period, as well as other filters.
     *
     * Generated from protobuf field <code>.google.cloud.billing.budgets.v1.Filter budget_filter = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $budget_filter = null;
    /**
     * Required. Budgeted amount.
     *
     * Generated from protobuf field <code>.google.cloud.billing.budgets.v1.BudgetAmount amount = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $amount = null;
    /**
     * Optional. Rules that trigger alerts (notifications of thresholds
     * being crossed) when spend exceeds the specified percentages of the budget.
     *
     * Generated from protobuf field <code>repeated .google.cloud.billing.budgets.v1.ThresholdRule threshold_rules = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $threshold_rules;
    /**
     * Optional. Rules to apply to notifications sent based on budget spend and
     * thresholds.
     *
     * Generated from protobuf field <code>.google.cloud.billing.budgets.v1.NotificationsRule notifications_rule = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $notifications_rule = null;
    /**
     * Optional. Etag to validate that the object is unchanged for a
     * read-modify-write operation.
     * An empty etag will cause an update to overwrite other changes.
     *
     * Generated from protobuf field <code>string etag = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $etag = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Resource name of the budget.
     *           The resource name implies the scope of a budget. Values are of the form
     *           `billingAccounts/{billingAccountId}/budgets/{budgetId}`.
     *     @type string $display_name
     *           User data for display name in UI. The name must be less than or equal to 60
     *           characters.
     *     @type \Google\Cloud\Billing\Budgets\V1\Filter $budget_filter
     *           Optional. Filters that define which resources are used to compute the
     *           actual spend against the budget amount, such as projects, services, and the
     *           budget's time period, as well as other filters.
     *     @type \Google\Cloud\Billing\Budgets\V1\BudgetAmount $amount
     *           Required. Budgeted amount.
     *     @type \Google\Cloud\Billing\Budgets\V1\ThresholdRule[]|\Google\Protobuf\Internal\RepeatedField $threshold_rules
     *           Optional. Rules that trigger alerts (notifications of thresholds
     *           being crossed) when spend exceeds the specified percentages of the budget.
     *     @type \Google\Cloud\Billing\Budgets\V1\NotificationsRule $notifications_rule
     *           Optional. Rules to apply to notifications sent based on budget spend and
     *           thresholds.
     *     @type string $etag
     *           Optional. Etag to validate that the object is unchanged for a
     *           read-modify-write operation.
     *           An empty etag will cause an update to overwrite other changes.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Billing\Budgets\V1\BudgetModel::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Resource name of the budget.
     * The resource name implies the scope of a budget. Values are of the form
     * `billingAccounts/{billingAccountId}/budgets/{budgetId}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Resource name of the budget.
     * The resource name implies the scope of a budget. Values are of the form
     * `billingAccounts/{billingAccountId}/budgets/{budgetId}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * User data for display name in UI. The name must be less than or equal to 60
     * characters.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * User data for display name in UI. The name must be less than or equal to 60
     * characters.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Optional. Filters that define which resources are used to compute the
     * actual spend against the budget amount, such as projects, services, and the
     * budget's time period, as well as other filters.
     *
     * Generated from protobuf field <code>.google.cloud.billing.budgets.v1.Filter budget_filter = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Billing\Budgets\V1\Filter|null
     */
    public function getBudgetFilter()
    {
        return $this->budget_filter;
    }

    public function hasBudgetFilter()
    {
        return isset($this->budget_filter);
    }

    public function clearBudgetFilter()
    {
        unset($this->budget_filter);
    }

    /**
     * Optional. Filters that define which resources are used to compute the
     * actual spend against the budget amount, such as projects, services, and the
     * budget's time period, as well as other filters.
     *
     * Generated from protobuf field <code>.google.cloud.billing.budgets.v1.Filter budget_filter = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Billing\Budgets\V1\Filter $var
     * @return $this
     */
    public function setBudgetFilter($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Billing\Budgets\V1\Filter::class);
        $this->budget_filter = $var;

        return $this;
    }

    /**
     * Required. Budgeted amount.
     *
     * Generated from protobuf field <code>.google.cloud.billing.budgets.v1.BudgetAmount amount = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Billing\Budgets\V1\BudgetAmount|null
     */
    public function getAmount()
    {
        return $this->amount;
    }

    public function hasAmount()
    {
        return isset($this->amount);
    }

    public function clearAmount()
    {
        unset($this->amount);
    }

    /**
     * Required. Budgeted amount.
     *
     * Generated from protobuf field <code>.google.cloud.billing.budgets.v1.BudgetAmount amount = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Billing\Budgets\V1\BudgetAmount $var
     * @return $this
     */
    public function setAmount($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Billing\Budgets\V1\BudgetAmount::class);
        $this->amount = $var;

        return $this;
    }

    /**
     * Optional. Rules that trigger alerts (notifications of thresholds
     * being crossed) when spend exceeds the specified percentages of the budget.
     *
     * Generated from protobuf field <code>repeated .google.cloud.billing.budgets.v1.ThresholdRule threshold_rules = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getThresholdRules()
    {
        return $this->threshold_rules;
    }

    /**
     * Optional. Rules that trigger alerts (notifications of thresholds
     * being crossed) when spend exceeds the specified percentages of the budget.
     *
     * Generated from protobuf field <code>repeated .google.cloud.billing.budgets.v1.ThresholdRule threshold_rules = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Billing\Budgets\V1\ThresholdRule[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setThresholdRules($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Billing\Budgets\V1\ThresholdRule::class);
        $this->threshold_rules = $arr;

        return $this;
    }

    /**
     * Optional. Rules to apply to notifications sent based on budget spend and
     * thresholds.
     *
     * Generated from protobuf field <code>.google.cloud.billing.budgets.v1.NotificationsRule notifications_rule = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Billing\Budgets\V1\NotificationsRule|null
     */
    public function getNotificationsRule()
    {
        return $this->notifications_rule;
    }

    public function hasNotificationsRule()
    {
        return isset($this->notifications_rule);
    }

    public function clearNotificationsRule()
    {
        unset($this->notifications_rule);
    }

    /**
     * Optional. Rules to apply to notifications sent based on budget spend and
     * thresholds.
     *
     * Generated from protobuf field <code>.google.cloud.billing.budgets.v1.NotificationsRule notifications_rule = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Billing\Budgets\V1\NotificationsRule $var
     * @return $this
     */
    public function setNotificationsRule($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Billing\Budgets\V1\NotificationsRule::class);
        $this->notifications_rule = $var;

        return $this;
    }

    /**
     * Optional. Etag to validate that the object is unchanged for a
     * read-modify-write operation.
     * An empty etag will cause an update to overwrite other changes.
     *
     * Generated from protobuf field <code>string etag = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Optional. Etag to validate that the object is unchanged for a
     * read-modify-write operation.
     * An empty etag will cause an update to overwrite other changes.
     *
     * Generated from protobuf field <code>string etag = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

}

