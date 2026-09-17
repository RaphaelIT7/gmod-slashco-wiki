<function name="ClearEffects" parent="Player" type="classfunc">
	<description>
		Immediately removes all of the player's active effects, calling each effect's <page>EFFECT#OnRemoved</page> (or <page>EFFECT#OnExpired</page>) callback and cancelling all expiry timers.
	</description>
	<realm>Shared</realm>
	<group>Effects</group>
</function>
