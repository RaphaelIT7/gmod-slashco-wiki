<function name="AddEffect" parent="Player" type="classfunc">
	<description>
		Applies an effect to the player for the given duration, calling its <page>Effect#OnApplied</page> callback (and <page>Effect#OnExpired</page> first if the effect wasn't already active and doesn't handle <page>Effect#OnRemoved</page>).<br>
		Once the duration ends, the effect expires automatically unless another instance of the same effect is still active.
	</description>
	<realm>Shared</realm>
	<group>Effects</group>
	<args>
		<arg name="effectName" type="string">Name of a registered effect.</arg>
		<arg name="duration" type="number">Seconds until the effect expires.</arg>
	</args>
</function>
